<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StaffController;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard', [
            'totalRevenue' => Sale::sum('total_price'),
            'totalSalesCount' => Sale::count(),
            'totalProducts' => Product::count(),
            'lowStockProducts' => Product::where('stock_quantity', '<=', 5)
                ->orderBy('stock_quantity')
                ->take(5)
                ->get(),
            'totalCustomers' => Customer::count(),
            'recentSales' => Sale::with(['product', 'customer', 'seller'])
                ->latest('created_at')
                ->take(5)
                ->get(),
        ]);
    })->name('dashboard');

    Route::resource('products', ProductController::class)->except(['show']);
    Route::resource('customers', CustomerController::class)->except(['show']);
    Route::resource('staff', StaffController::class)->except(['show']);

    Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');
    Route::get('/sales/create', [SaleController::class, 'create'])->name('sales.create');
    Route::post('/sales', [SaleController::class, 'store'])->name('sales.store');
    Route::delete('/sales/{sale}', [SaleController::class, 'destroy'])->name('sales.destroy');
});

require __DIR__.'/settings.php';