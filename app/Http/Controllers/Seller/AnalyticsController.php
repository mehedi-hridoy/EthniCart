<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\EthniOrder;
use Carbon\Carbon;

class AnalyticsController extends Controller
{
    public function index()
    {
        $sellerId = Auth::guard('seller')->id();
        $base = EthniOrder::where('seller_id', $sellerId);

        $range = request('range', '30d'); // 7d | 30d | 90d | 12m
        $now = Carbon::now();
        $groupExpr = 'DATE(created_at)';
        $labelFormat = 'M d';
        if ($range === '7d') {
            $from = $now->copy()->subDays(7)->startOfDay();
        } elseif ($range === '90d') {
            $from = $now->copy()->subDays(90)->startOfDay();
        } elseif ($range === '12m') {
            $from = $now->copy()->subMonths(12)->startOfMonth();
            $groupExpr = "DATE_FORMAT(created_at, '%Y-%m-01')"; // group by month start
            $labelFormat = 'M Y';
        } else { // 30d default
            $from = $now->copy()->subDays(30)->startOfDay();
        }

        // Time series revenue + units
        $byPeriod = (clone $base)
            ->where('created_at', '>=', $from)
            ->select(DB::raw("$groupExpr as bucket"), DB::raw('SUM(subtotal) as revenue'), DB::raw('SUM(quantity) as units'))
            ->groupBy(DB::raw($groupExpr))
            ->orderBy('bucket')
            ->get();

        $labels = $byPeriod->pluck('bucket')->map(function ($d) use ($labelFormat) {
            return Carbon::parse($d)->format($labelFormat);
        })->toArray();
        $revenue = $byPeriod->pluck('revenue')->map(fn($v) => (float)$v)->toArray();
        $units = $byPeriod->pluck('units')->map(fn($v) => (int)$v)->toArray();

        // Top products in range by units
        $topProducts = (clone $base)
            ->where('created_at', '>=', $from)
            ->select('product_name', DB::raw('SUM(quantity) as units'))
            ->groupBy('product_name')
            ->orderByDesc('units')
            ->limit(5)
            ->pluck('units', 'product_name');

        $topProductNames = $topProducts->keys()->values();

        // Units by product per bucket (for stacked chart)
        $byProductBucket = (clone $base)
            ->where('created_at', '>=', $from)
            ->whereIn('product_name', $topProductNames)
            ->select(DB::raw("$groupExpr as bucket"), 'product_name', DB::raw('SUM(quantity) as units'))
            ->groupBy(DB::raw($groupExpr), 'product_name')
            ->orderBy('bucket')
            ->get();

        // Normalize matrix labels x products
        $buckets = $byProductBucket->pluck('bucket')->unique()->sort()->values();
        $bucketLabels = $buckets->map(fn($d) => Carbon::parse($d)->format($labelFormat))->toArray();
        $productDatasets = [];
        foreach ($topProductNames as $pName) {
            $series = [];
            foreach ($buckets as $b) {
                $row = $byProductBucket->firstWhere(fn($r) => $r->bucket == $b && $r->product_name === $pName);
                $series[] = $row ? (int)$row->units : 0;
            }
            $productDatasets[] = [
                'label' => $pName,
                'data' => $series,
            ];
        }

        // Revenue by product for side list
        $productBreakdown = (clone $base)
            ->where('created_at', '>=', $from)
            ->select('product_name', DB::raw('SUM(subtotal) as revenue'))
            ->groupBy('product_name')
            ->orderByDesc('revenue')
            ->get();

        return view('seller.analytics', [
            'labels' => $labels,
            'revenue' => $revenue,
            'units' => $units,
            'productBreakdown' => $productBreakdown,
            'range' => $range,
            'bucketLabels' => $bucketLabels,
            'productDatasets' => $productDatasets,
        ]);
    }
}
