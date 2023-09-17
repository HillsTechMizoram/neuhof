<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/mamamia', function () {
    return view('frontend.mamamia');
});
Route::get('/lion', function () {
    return view('frontend.lion');
});
Route::get('/showman', function () {
    return view('frontend.showman');
});
Route::get('/feestructure', function () {
    return view('frontend.feestructure');
});
Route::get('/payment', function () {
    return view('frontend.payment');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});

// Route::get('/allpost',[HomeController::class, 'allpost']);

// Route::get('/contact', [ContactController::class, 'index']);
// Route::post('/contact', [ContactController::class, 'store']);

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
// Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/contacts', [ContactController::class, 'display']);
    Route::delete('/contacts/{id}', [ContactController::class, 'destroy']);
    Route::get('/contactbin', [ContactController::class, 'displaydeleted']);
    Route::post('/contactbin/{id}', [ContactController::class, 'restore']);

    Route::get('/post', [PostController::class, 'index']);
    Route::post('/post', [PostController::class, 'store']);
    Route::delete('/post/{id}', [PostController::class, 'destroy']);
    Route::get('/postbin', [PostController::class, 'displaydeleted']);
    Route::post('/postbin/{id}', [PostController::class, 'restore']);

});

require __DIR__ . '/auth.php';
