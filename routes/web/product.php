<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth', 'roles']
], function () {
    Route::name('product.')->prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::get('/{uuid}/freight/rate', [ProductController::class, 'getProductRates'])->name('freight.rate');
        Route::post('/freight/rate', [ProductController::class, 'storeProductFreightRate'])->name('store.freight.rate');
    });
});
