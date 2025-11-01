<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductViewController;
use App\Http\Controllers\SearchController;





//home route with products

Route::get('/home', function () {
    $products = DB::table('products')
        ->where('display_page', 'home')
        ->get();

    return view('home', compact('products'));
})->name('home');
// pages
Route::get('/foods', function () {
    return view('foods');
});

Route::get('/A1_foods_fruits', function () {
    return view('A1_foods_fruits');
});

Route::get('/A2_foods_sweets', function () {
    return view('A2_foods_sweets');
});

Route::get('/A3_foods_snacks', function () {
    return view('A3_foods_snacks');
});

Route::get('/A4_foods_dairy', function () {
    return view('A4_foods_dairy');
});

// B Routes of Farm fresh Vegetable
Route::get('/vegetables', function () {
    return view('vegetables');
});


// C. Rotutes of Fish and meat
Route::get('/fish&meat', function () {
    return view('fish&meat');
});
Route::get('/C1_Fish&Meat_fish', function () {
    return view('C1_Fish&Meat_fish');
});
Route::get('/C2_Fish&Meat_Meat', function () {
    return view('C2_Fish&Meat_Meat');
});

// D. routes of homamade masala
Route::get('/homemadeMasala', function () {
    return view('homemadeMasala');
});


// E. Routes of Pickles

Route::get('/pickles&condiments', function () {
    return view('pickles&condiments');
});

// F. routes of home and kitchen
Route::get('/home&kitchen', function () {
    return view('home&kitchen');
});

// G. Routes of Organic routes
Route::get('/organicRoots', function () {
    return view('organicRoots');
});


//H.  Beauty&Care route
Route::get('/beauty&care', function () {
    return view('beauty&care');
});
Route::get('/F1_Beauty&Care_SkinCare', function () {
    return view('F1_Beauty&Care_SkinCare');
});
Route::get('/F1_Beauty&Care_SkinCare', function () {
    return view('F2_Beauty&Care_HairCare');
});

//I. Clothing&Apparels routes
Route::get('/Clothing&Apparels', function () {
    return view('Clothing&Apparels');
});

Route::get('/I1_Clothings_WomenWear', function () {
    return view('I1_Clothings_WomenWear');
});

Route::get('/I2_Clothings_MenWear', function () {
    return view('I1_Clothings_MenWear');
});



Route::get('/craftItems', function () {
    return view('craftItems');
});


Route::get('/ecoFriendlyProducts', function () {
    return view('ecoFriendlyProducts');
});

Route::get('/gift', function () {
    return view('gift');
});



Route::get('/meet_theMakers', function () {
    return view('meet_theMakers');
});

Route::get('/fromTheSource', function () {
    return view('fromTheSource');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});
 
Route::get('/ethniPromise', function () {
    return view('ethniPromise');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});


Route::get('/stories', function () {
    return view('stories');
});

Route::get('/join_as_seller', function () {
    return view('join_as_seller');
});
Route::get('/privacy_policy', function () {
    return view('privacy_policy');
});
Route::get('/terms_of_service', function () {
    return view('terms_of_service');
});

Route::get('/accounts/account', function () {
    return view('accounts.account');
});

// Public product detail page
Route::get('/product/{product}', [ProductViewController::class, 'show'])->name('product.show');

// login 
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleManualAuthController;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Manual Google OAuth (no Socialite)
Route::get('/auth/google', [GoogleManualAuthController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleManualAuthController::class, 'callback'])->name('google.callback');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');





// sellers route
use App\Http\Controllers\SellerAuthController;
use App\Http\Controllers\Seller\ProductController;

Route::prefix('seller')->name('seller.')->group(function () {
    
    Route::get('/register', [SellerAuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [SellerAuthController::class, 'register']);

    Route::get('/login', [SellerAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [SellerAuthController::class, 'login']);
    Route::middleware('auth:seller')->group(function () {
        Route::get('/dashboard', function () {
            return view('seller.dashboard');
        })->name('dashboard');

        Route::post('/logout', [SellerAuthController::class, 'logout'])->name('logout');
        Route::get('/products', [ProductController::class, 'index'])->name('products.index');
        Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    });
});


// admin 
use App\Http\Controllers\AdminAuthController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('admin.loginShield')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login']);
    });
    Route::middleware('admin.setup')->group(function () {
        Route::get('/register', [AdminAuthController::class, 'showRegisterForm'])->name('register');
        Route::post('/register', [AdminAuthController::class, 'register']);
    });
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });
});


// seller routes

Route::middleware(['auth'])->group(function () {
    Route::get('/seller/upload', [SellerController::class, 'showUploadForm']);
    Route::post('/seller/upload', [SellerController::class, 'uploadProduct']);
    Route::get('/seller/products', [SellerController::class, 'myProducts']);
});

//upload product
Route::middleware(['auth:seller'])->group(function () {
    Route::get('/seller/upload-product', [ProductController::class, 'create'])->name('seller.product.create');
    Route::post('/seller/upload-product', [ProductController::class, 'store'])->name('seller.product.store');
});

//store product on db
Route::post('/seller/upload-product', [App\Http\Controllers\Seller\ProductController::class, 'store'])->name('seller.product.store');

//seller dashboard
use App\Http\Controllers\Seller\DashboardController;
use App\Http\Controllers\Seller\ProductController as SellerProductController;
use App\Http\Controllers\Seller\OrderController as SellerOrderController;
use App\Http\Controllers\Seller\AnalyticsController as SellerAnalyticsController;
use App\Http\Controllers\Seller\SettingsController as SellerSettingsController;

Route::middleware('auth:seller')->group(function () {
    Route::get('/seller/dashboard', [DashboardController::class, 'index'])->name('seller.dashboard');
    // Products
    Route::get('/seller/products', [SellerProductController::class, 'index'])->name('seller.products.index');
    // Orders
    Route::get('/seller/orders', [SellerOrderController::class, 'index'])->name('seller.orders.index');
    Route::patch('/seller/orders/{order}/status', [SellerOrderController::class, 'updateStatus'])->name('seller.orders.updateStatus');
    // Analytics
    Route::get('/seller/analytics', [SellerAnalyticsController::class, 'index'])->name('seller.analytics.index');
    // Settings
    Route::get('/seller/settings', [SellerSettingsController::class, 'edit'])->name('seller.settings.edit');
    Route::put('/seller/settings', [SellerSettingsController::class, 'update'])->name('seller.settings.update');
});

// Search route
Route::get('/search', [SearchController::class, 'search'])->name('search');

// show products on specific page
use App\Helpers\ProductHelper;

Route::get('/', function () {
    $products = ProductHelper::getProductsForPage('homepage', 50);
    return view('home', compact('products'));
});

Route::get('/vegetables', function () {
    $products = ProductHelper::getProductsForPage('vegetables');
    return view('vegetables', compact('products'));
});


// products
Route::get('/foods', function () {
    $products = ProductHelper::getProductsForPage('foods');
    return view('foods', compact('products'));
});

Route::get('/A1_foods_fruits', function () {
    $products = ProductHelper::getProductsForPage('A1_foods_fruits');
    return view('A1_foods_fruits', compact('products'));
});

Route::get('/A2_foods_sweets', function () {
    $products = ProductHelper::getProductsForPage('A2_foods_sweets');
    return view('A2_foods_sweets', compact('products'));
});

Route::get('/A3_foods_snacks', function () {
    $products = ProductHelper::getProductsForPage('A3_foods_snacks');
    return view('A3_foods_snacks', compact('products'));
});

Route::get('/A4_foods_dairy', function () {
    $products = ProductHelper::getProductsForPage('A4_foods_dairy');
    return view('A4_foods_dairy', compact('products'));
});

Route::get('/fish&meat', function () {
    $products = ProductHelper::getProductsForPage('fish&meat');
    return view('fish&meat', compact('products'));
});

Route::get('/C1_Fish&Meat_fish', function () {
    $products = ProductHelper::getProductsForPage('C1_Fish&Meat_fish');
    return view('C1_Fish&Meat_fish', compact('products'));
});
Route::get('/C2_Fish&Meat_Meat', function () {
    $products = ProductHelper::getProductsForPage('C2_Fish&Meat_Meat');
    return view('C2_Fish&Meat_Meat', compact('products'));
});

Route::get('/homemadeMasala', function () {
    $products = ProductHelper::getProductsForPage('homemadeMasala');
    return view('homemadeMasala', compact('products'));
});

Route::get('/pickles&condiments', function () {
    $products = ProductHelper::getProductsForPage('pickles&condiments');
    return view('pickles&condiments', compact('products'));
});
Route::get('/home&kitchen', function () {
    $products = ProductHelper::getProductsForPage('home&kitchen');
    return view('home&kitchen', compact('products'));
});

Route::get('/organicRoots', function () {
    $products = ProductHelper::getProductsForPage('organicRoots');
    return view('organicRoots', compact('products'));
});

Route::get('/beauty&care', function () {
    $products = ProductHelper::getProductsForPage('beauty&care');
    return view('beauty&care', compact('products'));
});


Route::get('/F1_Beauty&Care_SkinCare', function () {
    $products = ProductHelper::getProductsForPage('F1_Beauty&Care_SkinCare');
    return view('F1_Beauty&Care_SkinCare', compact('products'));
});
Route::get('/F2_Beauty&Care_HairCare', function () {
    $products = ProductHelper::getProductsForPage('F2_Beauty&Care_HairCare');
    return view('F2_Beauty&Care_HairCare', compact('products'));
});


Route::get('/Clothing&Apparels', function () {
    $products = ProductHelper::getProductsForPage('Clothing&Apparels');
    return view('Clothing&Apparels', compact('products'));
});
Route::get('/craftItems', function () {
    $products = ProductHelper::getProductsForPage('craftItems');
    return view('craftItems', compact('products'));
});
Route::get('/gift', function () {
    $products = ProductHelper::getProductsForPage('gift');
    return view('gift', compact('products'));
});

Route::get('/ecoFriendlyProducts', function () {
    $products = ProductHelper::getProductsForPage('ecoFriendlyProducts');
    return view('ecoFriendlyProducts', compact('products'));
});

Route::get('/I1_Clothings_WomenWear', function () {
    $products = ProductHelper::getProductsForPage('I1_Clothings_WomenWear');
    return view('I1_Clothings_WomenWear', compact('products'));
});

Route::get('/I2_Clothings_MenWear', function () {
    $products = ProductHelper::getProductsForPage('I2_Clothings_MenWear');
    return view('I2_Clothings_MenWear', compact('products'));
});




// product cart routes 
use App\Http\Controllers\CartController;

Route::middleware('auth')->group(function () {
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
});

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
});



// admin dashboard
Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::delete('/delete-user/{id}', [AdminDashboardController::class, 'deleteUser'])->name('admin.deleteUser');
    Route::delete('/delete-seller/{id}', [AdminDashboardController::class, 'deleteSeller'])->name('admin.deleteSeller');
});

Route::post('/admin/logout', function () {
    session()->forget('is_admin');
    return redirect('/admin/login');
})->name('admin.logout');

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/inventory', [AdminDashboardController::class, 'inventory'])->name('admin.inventory');
    Route::get('/customers', [AdminDashboardController::class, 'customers'])->name('admin.customers');
    Route::get('/sellers', [AdminDashboardController::class, 'sellers'])->name('admin.sellers');
    Route::get('/analytics', [AdminDashboardController::class, 'analytics'])->name('admin.analytics');

    Route::delete('/user/{id}', [AdminDashboardController::class, 'deleteUser'])->name('admin.deleteUser');
    Route::delete('/seller/{id}', [AdminDashboardController::class, 'deleteSeller'])->name('admin.deleteSeller');

    Route::post('/user/block/{id}', [AdminDashboardController::class, 'toggleUserBlock'])->name('admin.toggleUserBlock');
    Route::post('/seller/block/{id}', [AdminDashboardController::class, 'toggleSellerBlock'])->name('admin.toggleSellerBlock');

    Route::get('/seller/profile/{id}', [AdminDashboardController::class, 'showSellerProfile'])->name('admin.sellerProfile');
});


// user block unblock 
Route::post('/admin/users/{id}/block', [AdminDashboardController::class, 'blockUser'])->name('admin.block.user');
Route::post('/admin/users/{id}/unblock', [AdminDashboardController::class, 'unblockUser'])->name('admin.unblock.user');



// seller update middleware

Route::post('/products/update-stock', [ProductController::class, 'updateStock'])->name('seller.product.updateStock');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('seller.product.destroy');



// SSLCOMMERZ Start
use App\Http\Controllers\SslCommerzPaymentController;
Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END



// admin approval routes 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // User 
    Route::get('/users/{id}/delete', [AdminDashboardController::class, 'deleteUser'])->name('users.delete');
    Route::get('/users/{id}/toggle-block', [AdminDashboardController::class, 'toggleUserBlock'])->name('users.toggleBlock');


    Route::get('/sellers/{id}/toggle-block', [AdminDashboardController::class, 'toggleSellerBlock'])->name('sellers.toggleBlock');
    Route::get('/sellers/{id}/approve', [AdminDashboardController::class, 'approveSeller'])->name('sellers.approve');
    Route::get('/sellers/{id}/disapprove', [AdminDashboardController::class, 'disapproveSeller'])->name('sellers.disapprove');
    Route::get('/sellers/{id}/profile', [AdminDashboardController::class, 'showSellerProfile'])->name('sellers.profile');


});

//pdf generation
Route::post('/cart/cod', [CartController::class, 'codOrder'])->name('cart.cod');


// routes/web.php
use App\Http\Controllers\SellerStatController;

Route::get('/seller/stats', [SellerStatController::class, 'index'])
    ->middleware('auth')
    ->name('seller.stats');


// updated seller delete 

Route::delete('/admin/sellers/{id}', [AdminDashboardController::class, 'deleteSeller'])->name('admin.sellers.delete');
// routes/web.php


