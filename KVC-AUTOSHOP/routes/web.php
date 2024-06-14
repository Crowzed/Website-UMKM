<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;


// Public Routes
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/product', function () {
    return view('product');
})->name('product');
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Auth::routes();
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('remove_from_cart');
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');

require __DIR__.'/auth.php';
