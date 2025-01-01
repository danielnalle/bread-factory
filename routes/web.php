<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Middleware\EnsureUserIsCustomer;
use App\Http\Middleware\EnsureUserIsTeam;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Password;

Route::get('/utility/404', function () {
    return view('errors/404');
})->name('404');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
});

Route::get('/email/verify', function (Request $request) {
    if ($request->user()->hasVerifiedEmail()) {
        // Ambil role user yang sedang login
        $role = Auth::user()->role; // Pastikan kolom 'role' tersedia di tabel users

        // Arahkan berdasarkan role
        if ($role === 'customer') {
            return redirect()->route('landing-page');
        } elseif (in_array($role, ['admin', 'pegawai'])) {
            return redirect()->route('dashboard');
        }

        // Default redirect jika role tidak sesuai
        return redirect()->route('landing-page');
    }

    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    // Ambil role user yang sedang login
    $role = Auth::user()->role; // Pastikan kolom 'role' tersedia di tabel users

    // Arahkan berdasarkan role
    if ($role === 'customer') {
        return redirect()->route('landing-page');
    } elseif (in_array($role, ['admin', 'pegawai'])) {
        return redirect()->route('dashboard');
    }

    // Default redirect jika role tidak sesuai
    return redirect()->route('landing-page');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    flash('Link verifikasi berhasil dikirim!');
    return back();
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );
    $status === Password::RESET_LINK_SENT ?
        flash('Link reset password telah dikirim ke email Anda.', 'success')
        :
        flash('Tidak dapat mengirim link reset. Silakan coba lagi.', 'error');
    return redirect()->back();
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::get('/', function () {
    return view('landing/content/home');
})->name('landing-page');

// For Customers
Route::get('/products', function () {
    return view('landing/content/products');
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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware([EnsureUserIsCustomer::class])->group(function () {
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

        Route::get('/my-account/orders/detail', function () {
            return view('landing/my-account/detail');
        })->name('my-account.orders.detail');
    });
    Route::middleware([EnsureUserIsTeam::class])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard/index');
        })->name('dashboard');
        Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
        Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
        Route::get('/customers/edit', [CustomerController::class, 'edit'])->name('customers.edit');
        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
        Route::get('/dashboards/products', [ProductController::class, 'index'])->name('products');
        Route::get('/dashboards/products/create', [ProductController::class, 'create'])->name('products.create');
        Route::get('/dashboards/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::get('/orders', [OrderController::class, 'index'])->name('orders');
        Route::get('/orders/detail', [OrderController::class, 'detail'])->name('orders.detail');
        Route::get('/payment-method', [PaymentController::class, 'index'])->name('payment-method');
        Route::get('/payment-method/create', [PaymentController::class, 'create'])->name('payment-method.create');
        Route::get('/payment-method/edit/{payment}', [PaymentController::class, 'edit'])->name('payment-method.edit');
    });

    Route::get('/my-account/account', function () {
        return view('landing/my-account/account');
    })->name('my-account.account');
});
