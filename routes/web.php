<?php


// Controllers
use App\Models\User;
use App\Models\Order;
use App\Models\Customer;
use App\Models\CartDetail;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BreadController;
use App\Http\Controllers\BreadTypeController;
use App\Http\Controllers\CustomerController;
use App\Http\Middleware\EnsureUserIsAdmin;
use App\Http\Middleware\EnsureUserIsCustomer;
use App\Http\Middleware\EnsureUserIsTeam;
use App\Models\Bread;
use App\Models\Cart;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
    $email = request('email');

    if (!$email) {
        return redirect()->route('password.request')->with('error', 'Token tidak valid.');
    }
    return view('auth.reset-password', ['token' => $token, 'email' => $email]);
})->middleware('guest')->name('password.reset');

Route::get('/', function () {
    return view('landing/content/home', [
        'breads' => Bread::select('breads.*')
            ->join('bread_types', 'bread_types.id', '=', 'breads.bread_type_id')
            ->where('bread_types.isActive', '1')->orderBy('id', 'desc')->limit(4)->get(),
    ]);
})->name('landing-page');

// For Customers
Route::get('/breads', function () {
    return view('landing/content/breads');
})->name('roti');

Route::get('/about', function () {
    return view('landing/content/about');
})->name('about');

Route::get('/contact', function () {
    return view('landing/content/contact');
})->name('contact');

Route::get('/breads/detail/{bread}', function (Bread $bread) {
    return view('landing/content/detail', [
        'bread' => $bread,
        'similar' => Bread::where('bread_type_id', $bread->bread_type_id)->where('id', '!=', $bread->id)->orderBy('id', 'desc')->limit(4)->get()
    ]);
})->name('detail-breads');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/cart', function () {
        $cart = Cart::firstOrCreate(
            ['user_id' => Auth::user()->id, 'is_active' => true]
        );

        return view('landing/content/cart', [
            'cart' => $cart,
            'breads' => Bread::select('breads.*')
                ->join('bread_types', 'bread_types.id', '=', 'breads.bread_type_id')
                ->where('bread_types.isActive', 1)
                ->whereNotIn('breads.id', function ($query) {
                    $query->select('cart_details.bread_id')
                        ->from('cart_details')
                        ->join('carts', 'carts.id', '=', 'cart_details.cart_id')
                        ->where('carts.user_id', Auth::user()->id)
                        ->where('carts.is_active', true);
                })
                ->orderBy('breads.id', 'desc')
                ->limit(4)
                ->get()
        ]);
    })->name('carts');

    Route::get('/checkout', function () {
        return view('landing/content/checkout');
    })->name('checkout');

    Route::get('/validation', function () {
        return view('landing/content/validation');
    })->name('validation');

    Route::get('/my-account/orders', function () {
        return view('landing/my-account/orders');
    })->name('my-account.orders');

    // Using get for development purpose, do not use get when in production
    Route::get('/my-account/place-order/{cart_id}', function (int $cart_id) {
        // dd(Cart::where('user_id', Auth::id())->where('is_active', false)->get());
        // $cart_id = Cart::where('user_id', Auth::id())->where('is_active', false)->first()->id;

        $phone = Customer::where('user_id', Auth::id())->first()->phone ?? null;

        if (!isset($phone)) {
            return redirect()->route('my-account.orders')->with('error', 'Nomor telepon belum terdaftar');
        }

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = config('midtrans.is_sanitized');
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = config('midtrans.is_3ds');

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => Order::where('cart_id', $cart_id)->first()->total_price,
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => $phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return redirect()->route('my-account.orders.detail', ['cart_id' => $cart_id])->with('snap-token', $snapToken);
    })->name('my-account.place-order');

    Route::get('/my-account/account', function () {
        return view('landing/my-account/account');
    })->name('my-account.account');

    Route::get('/my-account/orders/detail/{cart_id}', function (int $cart_id) {
        $data = [
            'cart_id' => $cart_id,
            'customer_name' => Auth::user()->name,
            'cart_details' => CartDetail::where('cart_id', $cart_id)->get(),
            'customer' => Customer::where('user_id', Auth::id())->first(),
            'order' => Order::where('cart_id', $cart_id)->first(),
            'snap_token' => session('snap-token')
        ];

        return view('landing/my-account/detail', $data);
    })->name('my-account.orders.detail');

    Route::post('/transaction-detail', function (Request $req) {
        $transaction_status = $req->json('transaction_status');

        if ($transaction_status == "settlement") {
            $order = Order::where('cart_id', $req->json('cart_id'))->first();

            $order->update(['payment_status_id' => 3]);

            return response()->json(['payment_status' => 'success', 'message' => 'Pembayaran berhasil']);
        };

        return response()->json(['payment_status' => 'failed', 'message' => 'Pembayaran gagal']);
        // $serverKey = config('midtrans.server_key');

        // $hashed = hash("sha512", $req->order_id . $req->status_code . $req->gross_amount . $serverKey);

        // $cart_id = Cart::where('user_id', Auth::id())->where('is_active', false)->first()->id;
        // dd($hashed);

        // if ($hashed == $req->signature_key) {
        //     if ($req->transaction_status == "capture") {
        //         $order = Order::where('cart_id', $cart_id)->first();
        //         $order->update(['payment_status_id' => 3]);
        //     }
        // };
    })->name('transaction-response');

    // Admin Dashboard
    Route::middleware([EnsureUserIsTeam::class])->group(function () {
        Route::middleware([EnsureUserIsAdmin::class])->group(function () {
            Route::get('/users', [UserController::class, 'index'])->name('users');
            Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
            Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
            Route::get('/bread-types/create', [BreadTypeController::class, 'create'])->name('bread_types.create');
            Route::get('/bread-types/edit/{type}', [BreadTypeController::class, 'edit'])->name('bread_types.edit');
            Route::get('/dashboards/breads/create', [BreadController::class, 'create'])->name('breads.create');
            Route::get('/dashboards/breads/edit/{bread}', [BreadController::class, 'edit'])->name('breads.edit');
        });
        Route::get('/dashboard', function () {
            return view('dashboard/index');
        })->name('dashboard');
        Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
        // Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
        // Route::get('/customers/edit', [CustomerController::class, 'edit'])->name('customers.edit');
        Route::get('/dashboards/breads', [BreadController::class, 'index'])->name('breads');
        Route::get('/dashboards/breads/detail/{bread}', [BreadController::class, 'detail'])->name('breads.detail');
        Route::get('/bread-types', [BreadTypeController::class, 'index'])->name('bread_types');
        Route::get('/orders', [OrderController::class, 'index'])->name('orders');
        Route::get('/orders/detail/{order}', [OrderController::class, 'detail'])->name('orders.detail');
    });
});
