<?php

declare(strict_types=1);

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function (): void {
    Route::view('dashboard', 'dashboard')->middleware('verified')->name('dashboard');

    Route::name('profile.')->prefix('profile')->controller(ProfileController::class)->group(function (): void {
        Route::get('', 'edit')->name('edit');
        Route::patch('', 'update')->name('update');
        Route::delete('', 'destroy')->name('destroy');
    });

    Route::name('products.')->prefix('products')->controller(ProductController::class)->group(function (): void {
        Route::get('', 'index')->name('index');
        Route::get('{product}', 'edit')->name('edit');
        Route::patch('{product}', 'update')->name('update');
        Route::delete('{product}', 'destroy')->name('destroy');
    });
});

require __DIR__.'/auth.php';
