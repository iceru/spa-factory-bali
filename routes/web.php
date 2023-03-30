<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeSliderController;
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

Route::get('/e-library', [ArticleController::class, 'index'])->name('article');
Route::get('/e-library/{article}', [ArticleController::class, 'show'])->name('article.detail');

Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


Route::middleware('auth')->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->group(function () {
        Route::get('/client', [ClientController::class, 'create'])->name('client.create');
        Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
        Route::get('/client/edit/{client}', [ClientController::class, 'edit'])->name('client.edit');
        Route::patch('/client/update/{client}', [ClientController::class, 'update'])->name('client.update');
        Route::delete('/client/delete/{client}', [ClientController::class, 'destroy'])->name('client.delete');

        Route::get('/products', [ProductsController::class, 'create'])->name('products.create');
        Route::post('/products/store', [ProductsController::class, 'store'])->name('products.store');
        Route::get('/products/edit/{product}', [ProductsController::class, 'edit'])->name('products.edit');
        Route::patch('/products/update/{product}', [ProductsController::class, 'update'])->name('products.update');
        Route::delete('/products/delete/{product}', [ProductsController::class, 'destroy'])->name('products.delete');

        Route::get('/homeslider', [HomeSliderController::class, 'create'])->name('homeslider.create');
        Route::post('/homeslider/store', [HomeSliderController::class, 'store'])->name('homeslider.store');
        Route::get('/homeslider/edit/{homeslider}', [HomeSliderController::class, 'edit'])->name('homeslider.edit');
        Route::patch('/homeslider/update/{homeslider}', [HomeSliderController::class, 'update'])->name('homeslider.update');
        Route::delete('/homeslider/delete/{homeslider}', [HomeSliderController::class, 'destroy'])->name('homeslider.delete');

        Route::get('/sustainability', [SustainabilityController::class, 'create'])->name('sustainability.create');
        Route::post('/sustainability/store', [SustainabilityController::class, 'store'])->name('sustainability.store');
        Route::get('/sustainability/edit/{sustainability}', [SustainabilityController::class, 'edit'])->name('sustainability.edit');
        Route::patch('/sustainability/update/{sustainability}', [SustainabilityController::class, 'update'])->name('sustainability.update');
        Route::delete('/sustainability/delete/{sustainability}', [SustainabilityController::class, 'destroy'])->name('sustainability.delete');

        Route::get('/e-library', [ArticleController::class, 'create'])->name('article.create');
        Route::post('/e-library/store', [ArticleController::class, 'store'])->name('article.store');
        Route::get('/e-library/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
        Route::patch('/e-library/update/{article}', [ArticleController::class, 'update'])->name('article.update');
        Route::delete('/e-library/delete/{article}', [ArticleController::class, 'destroy'])->name('article.delete');

        Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
    });
});

require __DIR__ . '/auth.php';
