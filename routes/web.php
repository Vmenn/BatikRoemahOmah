<?php

use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home')->middleware('user');
route::get('/orders',[App\Http\Controllers\OrdersController::class,'index'])->name('orders')->middleware('user');
route::get('/cart',[App\Http\Controllers\CartController::class,'index'])->name('cart')->middleware('user');
route::get('/about',[App\Http\Controllers\AboutController::class,'index'])->name('about')->middleware('user');
route::get('/contach',[App\Http\Controllers\ContachController::class,'index'])->name('contach')->middleware('user');
route::get('/checkout',[App\Http\Controllers\CheckoutController::class,'index'])->name('checkout')->middleware('user');
route::get('/shop',[App\Http\Controllers\ShopController::class,'index'])->name('shop')->middleware('user');

Route::get('/add-to-cart/{slug}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('add-to-cart')->middleware('user');
Route::get('cart-delete/{id}',[App\Http\Controllers\CartController::class, 'cartDelete'])->name('cart-delete')->middleware('user');
Route::post('cart-update',[App\Http\Controllers\CartController::class, 'cartUpdate'])->name('cart.update')->middleware('user');

Route::post('/Checkout-Order',[App\Http\Controllers\CheckoutController::class,'store'])->name('/Checkout-Order')->middleware('user');
Auth::routes(['verify' => true]);

Route::prefix('admin')
    // ->namespace('Admin')
    ->middleware(['auth', 'role.admin'])
    ->group(function () {

        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('user',UsersController::class);
        Route::resource('product',ProductController::class);
        Route::resource('order',OrderController::class);

        Route::get('/laporan',[App\Http\Controllers\Admin\LaporanController::class,'index'])->name('laporan');

    });

