<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing/content/home');
})->name('landing-page');

Route::get('/produk', function () {
    return view('landing/content/produk');
})->name('produk');

Route::get('/about', function () {
    return view('landing/content/about');
})->name('about');

Route::get('/contact', function () {
    return view('landing/content/contact');
})->name('contact');

Route::get('/produk/detail', function () {
    return view('landing/content/detail');
})->name('detail-produk');

Route::get('/cart', function () {
    return view('landing/content/cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('landing/content/checkout');
})->name('checkout');

Route::get('/berhasil', function () {
    return view('landing/content/berhasil');
})->name('berhasil');

Route::get('/my-account/orders', function () {
    return view('landing/my-account/orders');
})->name('my-account.orders');

Route::get('/my-account/account', function () {
    return view('landing/my-account/account');
})->name('my-account.account');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/utility/404', function () {
    return view('errors/404');
})->name('404');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::get('/customers/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/categories/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::get('/orders/detail', [OrderController::class, 'detail'])->name('orders.detail');
Route::get('/payment-method', [PaymentController::class, 'index'])->name('payment-method');
Route::get('/payment-method/create', [PaymentController::class, 'create'])->name('payment-method.create');
Route::get('/payment-method/edit', [PaymentController::class, 'edit'])->name('payment-method.edit');
