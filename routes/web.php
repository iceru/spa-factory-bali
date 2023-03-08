<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SustainabilityController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about');

Route::get('/sustainability', [SustainabilityController::class, 'index'])->name('sustain.index');

Route::get('/clientele', [ClientController::class, 'index'])->name('client.index');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->group(function () {
        Route::get('/client', [ClientController::class, 'create'])->name('client.create');
        Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
        Route::get('/client/edit', [ClientController::class, 'edit'])->name('client.edit');
        Route::patch('/client/update', [ClientController::class, 'update'])->name('client.update');
        Route::delete('/client/delete', [ClientController::class, 'delete'])->name('client.delete');

        Route::get('/products', [ProductsController::class, 'create'])->name('products.create');
        Route::post('/products/store', [ProductsController::class, 'store'])->name('products.store');
        Route::get('/products/edit/{product}', [ProductsController::class, 'edit'])->name('products.edit');
        Route::patch('/products/update/{product}', [ProductsController::class, 'update'])->name('products.update');
        Route::delete('/products/delete/{product}', [ProductsController::class, 'delete'])->name('products.delete');
    });
});

require __DIR__ . '/auth.php';
