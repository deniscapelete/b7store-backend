<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return response()->json(['pong' => true]);
});

Route::get('banners', [BannerController::class, 'getAllBanners']);

Route::get('products', [ProductController::class, 'getAllProducts']);
