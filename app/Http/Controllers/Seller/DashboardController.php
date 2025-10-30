<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\EthniOrder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $sellerId = Auth::guard('seller')->id(); // get current logged-in seller
        $products = Product::where('seller_id', $sellerId)->latest()->get();

        // Aggregate sales metrics for this seller
        $baseQuery = EthniOrder::where('seller_id', $sellerId);

        $totalRevenue = (clone $baseQuery)->sum('subtotal');
        $totalOrders  = (clone $baseQuery)->count();
        $unitsSold    = (clone $baseQuery)->sum('quantity');

        // Top selling products by units and revenue (top 5 for sidebar)
        $topProducts = (clone $baseQuery)
            ->select('product_id', 'product_name', DB::raw('SUM(quantity) as units'), DB::raw('SUM(subtotal) as revenue'))
            ->groupBy('product_id', 'product_name')
            ->orderByDesc('units')
            ->limit(5)
            ->get();

        // Product performance chart (top 10 by revenue)
        $productPerf = (clone $baseQuery)
            ->select('product_id', 'product_name', DB::raw('SUM(quantity) as units'), DB::raw('SUM(subtotal) as revenue'))
            ->groupBy('product_id', 'product_name')
            ->orderByDesc('revenue')
            ->limit(10)
            ->get();
        $productChartLabels  = $productPerf->pluck('product_name')->toArray();
        $productChartUnits   = $productPerf->pluck('units')->map(fn($v) => (int)$v)->toArray();
        $productChartRevenue = $productPerf->pluck('revenue')->map(fn($v) => (float)$v)->toArray();

        // Sold units per product for table display
        $soldByProduct = (clone $baseQuery)
            ->select('product_id', DB::raw('SUM(quantity) as units'))
            ->groupBy('product_id')
            ->pluck('units', 'product_id');

        // Product stock chart arrays
        $stockLabels = $products->pluck('name')->toArray();
        $stockValues = $products->pluck('stock')->map(fn($v) => (int) $v)->toArray();

        // Quick sales buckets: Today, Last 3 Days, Last 7 Days
        $now = Carbon::now();
        $buckets = [
            'Today'    => $now->copy()->startOfDay(),
            'Last 3D'  => $now->copy()->subDays(3)->startOfDay(),
            'Last 7D'  => $now->copy()->subDays(7)->startOfDay(),
        ];
        $salesBucketLabels = array_keys($buckets);
        $salesBucketRevenue = [];
        $salesBucketUnits = [];
        foreach ($buckets as $label => $fromDate) {
            $q = (clone $baseQuery)->where('created_at', '>=', $fromDate);
            $salesBucketRevenue[] = (float) $q->sum('subtotal');
            $salesBucketUnits[]   = (int) (clone $q)->sum('quantity');
        }

        return view('seller.dashboard', compact(
            'products',
            'totalRevenue',
            'totalOrders',
            'unitsSold',
            'topProducts',
            'soldByProduct',
            'stockLabels',
            'stockValues',
            'salesBucketLabels',
            'salesBucketRevenue',
            'salesBucketUnits'
        ));
    }
}
