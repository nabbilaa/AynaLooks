<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WhatsAppController;



Route::get('/', function () {
    return view('landing.index');
})->name('index');

Route::get('/pricing', function () {
    return view('landing.pricing');
});

//Page About
Route::get('/about', [LandingPageController::class, 'about'])->name('landing.about');

//PageContact
Route::get('/contact', [LandingPageController::class, 'contact'])->name('landing.contact');

//PageCategory
Route::get('/category', [LandingPageController::class, 'category'])->name('landing.category');

//PageProduct
Route::get('/product', [LandingPageController::class, 'product'])->name('landing.product');

Route::get('/shop', [LandingPageController::class, 'index'])->name('category.index');


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});


Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


Route::get('/app', function () {
    return view('layouts.app');
});


Route::get('/app', function () {
    return view('layouts.app');
})->name('app');

//Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::resource('kategori', kategoricontroller::class);

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');


Route::resource('produk', produkcontroller::class);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/register', [RegisterController::class, 'register'])->name('register');
//kategori di landing
Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');

// Halaman form keranjang (cart)
Route::get('/cart', function () {
    $produk = \App\Models\Produk::all(); // ambil semua produk
    return view('landing.cart', compact('produk'));
})->name('cart');

// Proses penyimpanan cart (checkout)

Route::post('/checkout/process', [CartController::class, 'checkoutProcess'])->name('checkout.process');

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/pesanan', [AdminController::class, 'index'])->name('pesanan.index');


//Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');

//contactpage
Route::post('/send-whatsapp', [ContactController::class, 'send'])->name('send.whatsapp');

Route::middleware(['web'])->group(function () {
    // Route untuk menampilkan halaman checkout
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
});

Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');

// Route untuk halaman konfirmasi order (opsional)
Route::get('/order/{order}', [CheckoutController::class, 'show'])->name('order.show');

//logout
// Rute untuk halaman utama
Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');

// Rute untuk logout (dapat digunakan untuk admin dan pengguna biasa)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Rute dashboard admin (contoh, sesuaikan dengan kebutuhan)
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
    Route::get('/account/orders', [AccountController::class, 'orders'])->name('account.orders');
    Route::get('/profile', [AccountController::class, 'show'])->name('account.index');
    Route::put('/profile', [AccountController::class, 'update'])->name('profile.update');
});

// Rute autentikasi
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');

Route::get('/form-wa', function () {
    return view('form');
});

Route::get('/kirim-whatsapp', [WhatsAppController::class, 'kirim'])->name('kirim.whatsapp');

Route::get('/account/orders', [AccountController::class, 'orders'])->name('account.orders')->middleware('auth');

