<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Middleware\EnsureUserAuthenticated;
use App\Http\Middleware\SaveLastUrl;
use App\Http\Middleware\UserAuthentication;

Route::get('/utility/404', function () {
    return view('errors/404');
})->name('404');

Route::middleware([EnsureUserAuthenticated::class])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'getUsersByLogin'])->name('login.getUsers');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
});

Route::middleware([SaveLastUrl::class, UserAuthentication::class])->group(function () {
    Route::get('/', function () {
        return view('landing/content/home');
    })->name('landing-page');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

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

    Route::get('/account', function () {
        return view('admin/account/account');
    })->name('account');
});
