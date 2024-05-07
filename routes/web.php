<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PusherController;
use App\Models\Service;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/products', function () {
//     return view('interface.products');
// })->name('products');

// Route::prefix('products')->group(function () {
//     Route::get('/', [ProductController::class, 'products'])->name('products');
//     Route::get('/create', [ProductController::class, 'create'])->name('create');
//     Route::post('/', [ProductController::class, 'store'])->name('store');
//     Route::get('/{products}/edit', [ProductController::class, 'edit'])->name('edit');
//     Route::put('/products/{products}', [ProductController::class, 'update'])->name('update');
//     Route::delete('/{products}', [ProductController::class, 'destroy'])->name('destroy');
// });

// Route::get('/services', function () {
//     return view('services');
// })->name('services');

Route::middleware("auth")->group(function () {
    Route::get('/services', [ServiceController::class, 'services'])->name("services");
    Route::get('services/{service}', [ServiceController::class, 'show'])->name("services.show");
    Route::post('subscription', [ServiceController::class, 'subscription'])->name("subscription.create");
});
// Route::get(uri:'/', action:'App\Http\Controllers\StripeController@index');
// Route::post(uri:'/checkout', action:'App\Http\Controllers\StripeController@checkout');
// Route::get(uri:'/success', action:'App\Http\Controllers\StripeController@success');
// Route::get('/login', [ProfileController::class, 'showLoginForm'])->name('login');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', [PusherController::class, 'index']);
Route::post('/broadcast', [PusherController::class, 'broadcast']);
Route::post('/receive', [PusherController::class, 'receive']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
