<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Seller;
use App\Models\Product;
use App\Models\EthniOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Get authenticated admin
        $admin = Auth::user();
        $adminName = $admin ? $admin->name : 'Admin';
        
        $users = User::all();
        $sellers = Seller::all();
        $products = Product::all();        $pendingSellers = Seller::where('is_approved', false)->get();
        $approvedSellers = Seller::where('is_approved', true)->get();

        // Revenue and Order Stats
        $totalRevenue = EthniOrder::sum('subtotal');
        $totalOrders = EthniOrder::count();
        $averageOrderValue = $totalOrders > 0 ? $totalRevenue / $totalOrders : 0;

        // Calculate growth percentages (comparing last 30 days vs previous 30 days)
        $last30DaysRevenue = EthniOrder::where('created_at', '>=', Carbon::now()->subDays(30))->sum('subtotal');
        $previous30DaysRevenue = EthniOrder::whereBetween('created_at', [Carbon::now()->subDays(60), Carbon::now()->subDays(30)])->sum('subtotal');
        $revenueGrowth = $previous30DaysRevenue > 0 ? (($last30DaysRevenue - $previous30DaysRevenue) / $previous30DaysRevenue) * 100 : 0;

        // New customers in last 30 days vs previous 30 days
        $newCustomers = User::where('created_at', '>=', Carbon::now()->subDays(30))->count();
        $previousNewCustomers = User::whereBetween('created_at', [Carbon::now()->subDays(60), Carbon::now()->subDays(30)])->count();
        $customerGrowth = $previousNewCustomers > 0 ? (($newCustomers - $previousNewCustomers) / $previousNewCustomers) * 100 : 0;

        // Repeat purchase rate
        $customersWithOrders = EthniOrder::select('user_id')->distinct()->count();
        $customersWithMultipleOrders = EthniOrder::select('user_id')
            ->groupBy('user_id')
            ->havingRaw('COUNT(*) > 1')
            ->get()
            ->count();
        $repeatPurchaseRate = $customersWithOrders > 0 ? ($customersWithMultipleOrders / $customersWithOrders) * 100 : 0;
        $repeatPurchaseGrowth = 25.4; // Mock data for now

        // Top Sellers by Revenue (7, 15, 30 days)
        $topSellers7Days = $this->getTopSellers(7);
        $topSellers15Days = $this->getTopSellers(15);
        $topSellers30Days = $this->getTopSellers(30);

        // Top Buyers (7 and 30 days)
        $topBuyers7Days = $this->getTopBuyers(7);
        $topBuyers30Days = $this->getTopBuyers(30);

        // Revenue trend for last 14 days (for Summary chart)
        $revenueTrend = [];
        $orderTrend = [];
        $trendLabels = [];
        for ($i = 13; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $trendLabels[] = $date->format('M d');
            $dayRevenue = EthniOrder::whereDate('created_at', $date)->sum('subtotal');
            $dayOrders = EthniOrder::whereDate('created_at', $date)->count();
            $revenueTrend[] = round($dayRevenue, 2);
            $orderTrend[] = $dayOrders;
        }

        // Low stock products
        $lowStockProducts = Product::where('stock', '<=', 10)
            ->where('stock', '>', 0)
            ->orderBy('stock', 'asc')
            ->limit(10)
            ->get();

        // Out of stock products
        $outOfStockCount = Product::where('stock', 0)->count();

        // Total inventory value
        $inventoryValue = Product::sum(DB::raw('price * stock'));

        // Recent orders for table
        $recentOrders = EthniOrder::with(['user', 'seller'])
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        // Get top 10 selling products for the last 10 days
        $topSellingProducts = EthniOrder::select('product_id', 'product_name', DB::raw('SUM(quantity) as total_sales'))
            ->with(['product.images'])
            ->where('created_at', '>=', Carbon::now()->subDays(10))
            ->groupBy('product_id', 'product_name')
            ->orderByDesc('total_sales')
            ->limit(10)
            ->get();

        return view('admin.dashboard', compact(
            'adminName',
            'users',
            'sellers',
            'products',
            'pendingSellers',
            'approvedSellers',
            'totalRevenue',
            'totalOrders',
            'averageOrderValue',
            'revenueGrowth',
            'last30DaysRevenue',
            'newCustomers',
            'customerGrowth',
            'repeatPurchaseRate',
            'repeatPurchaseGrowth',
            'topSellers7Days',
            'topSellers15Days',
            'topSellers30Days',
            'topBuyers7Days',
            'topBuyers30Days',
            'revenueTrend',
            'orderTrend',
            'trendLabels',
            'lowStockProducts',
            'outOfStockCount',
            'inventoryValue',
            'recentOrders',
            'topSellingProducts'
        ));
    }

    private function getTopSellers($days)
    {
        return EthniOrder::select('ethni_orders.seller_id', 'sellers.name as seller_name', DB::raw('SUM(ethni_orders.subtotal) as total_revenue'), DB::raw('COUNT(*) as total_orders'))
            ->leftJoin('sellers', 'ethni_orders.seller_id', '=', 'sellers.id')
            ->where('ethni_orders.created_at', '>=', Carbon::now()->subDays($days))
            ->whereNotNull('ethni_orders.seller_id')
            ->groupBy('ethni_orders.seller_id', 'sellers.name')
            ->orderByDesc('total_revenue')
            ->limit(5)
            ->get();
    }

    private function getTopBuyers($days)
    {
        return EthniOrder::select('ethni_orders.user_id', 'users.name as user_name', 'users.email as user_email', DB::raw('SUM(ethni_orders.subtotal) as total_spent'), DB::raw('COUNT(*) as total_orders'))
            ->leftJoin('users', 'ethni_orders.user_id', '=', 'users.id')
            ->where('ethni_orders.created_at', '>=', Carbon::now()->subDays($days))
            ->whereNotNull('ethni_orders.user_id')
            ->groupBy('ethni_orders.user_id', 'users.name', 'users.email')
            ->orderByDesc('total_spent')
            ->limit(5)
            ->get();
    }


    public function deleteUser($id)
    {
        User::destroy($id);
        return redirect()->route('admin.dashboard')->with('success', 'User deleted successfully.');
    }

    public function deleteSeller($id)
    {
        Seller::destroy($id);
        return redirect()->route('admin.dashboard')->with('success', 'Seller deleted successfully.');
    }


    // block unblock 
    public function toggleUserBlock($id)
{
    $user = User::findOrFail($id);
    $user->is_blocked = !$user->is_blocked;
    $user->save();

    return redirect()->route('admin.dashboard')->with('success', 'User block status changed.');
}


public function toggleSellerBlock($id)
{
    $seller = Seller::findOrFail($id);
    $seller->is_blocked = !$seller->is_blocked;
    $seller->save();

    return redirect()->route('admin.dashboard')->with('success', 'Seller block status changed.');
}

public function showSellerProfile($id)
{
    $seller = Seller::findOrFail($id);
    $products = $seller->products()->latest()->take(5)->get();
    $totalProducts = $seller->products()->count();

    return view('admin.seller_profile', compact('seller', 'products', 'totalProducts'));
}


public function approveSeller($id)
{
    $seller = Seller::findOrFail($id);
    $seller->is_approved = true;
    $seller->save();

    return redirect()->route('admin.dashboard')->with('success', 'Seller approved successfully.');
}

public function disapproveSeller($id)
{
    $seller = Seller::findOrFail($id);
    $seller->is_approved = false;
    $seller->save();

    return redirect()->route('admin.dashboard')->with('success', 'Seller disapproved successfully.');
}


    // Inventory Page
    public function inventory()
    {
        $admin = Auth::user();
        $adminName = $admin ? $admin->name : 'Admin';
        
        $products = Product::with('seller')->orderBy('created_at', 'desc')->paginate(20);
        $lowStockProducts = Product::where('stock', '<=', 10)->where('stock', '>', 0)->count();
        $outOfStockProducts = Product::where('stock', 0)->count();
        $totalInventoryValue = Product::sum(DB::raw('price * stock'));
        
        return view('admin.inventory', compact('adminName', 'products', 'lowStockProducts', 'outOfStockProducts', 'totalInventoryValue'));
    }

    // Customers Page
    public function customers()
    {
        $admin = Auth::user();
        $adminName = $admin ? $admin->name : 'Admin';
        
        $users = User::orderBy('created_at', 'desc')->paginate(20);
        $totalUsers = User::count();
        $activeUsers = User::where('is_blocked', false)->count();
        $blockedUsers = User::where('is_blocked', true)->count();
        
        return view('admin.customers', compact('adminName', 'users', 'totalUsers', 'activeUsers', 'blockedUsers'));
    }

    // Sellers Page
    public function sellers()
    {
        $admin = Auth::user();
        $adminName = $admin ? $admin->name : 'Admin';
        
        $sellers = Seller::withCount('products')->orderBy('created_at', 'desc')->paginate(20);
        $pendingSellers = Seller::where('is_approved', false)->get();
        $approvedSellers = Seller::where('is_approved', true)->count();
        $totalSellers = Seller::count();
        
        return view('admin.sellers', compact('adminName', 'sellers', 'pendingSellers', 'approvedSellers', 'totalSellers'));
    }

    // Analytics Page
    public function analytics()
    {
        $admin = Auth::user();
        $adminName = $admin ? $admin->name : 'Admin';
        
        // Comprehensive analytics data
        $totalRevenue = EthniOrder::sum('subtotal');
        $totalOrders = EthniOrder::count();
        
        // Monthly revenue for chart (last 12 months)
        $monthlyRevenue = [];
        $monthlyLabels = [];
        for ($i = 11; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $monthlyLabels[] = $date->format('M Y');
            $monthlyRevenue[] = EthniOrder::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->sum('subtotal');
        }
        
        // Top products by revenue
        $topProducts = EthniOrder::select('product_name', DB::raw('SUM(subtotal) as revenue'), DB::raw('SUM(quantity) as units'))
            ->groupBy('product_name')
            ->orderByDesc('revenue')
            ->limit(10)
            ->get();
        
        return view('admin.analytics', compact('adminName', 'totalRevenue', 'totalOrders', 'monthlyRevenue', 'monthlyLabels', 'topProducts'));
    }


}
