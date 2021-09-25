<?php

use Illuminate\Support\Facades\Route;
use TinhPHP\Tool\Http\Controllers\QrcodeController;
use TinhPHP\Tool\Http\Controllers\FacebookController;
use TinhPHP\Tool\Http\Controllers\ShortLinkController;

Route::get('sl/{short_link}', [ShortLinkController::class, 'index']);

Route::get('tool/generate-qrcode/{slug}', [QrcodeController::class, 'index']);
Route::get('tool/generate-qrcode', [QrcodeController::class, 'index']);
Route::post('tool/generate-qrcode/{slug}', [QrcodeController::class, 'index']);

Route::get('tool/facebook-icon', [FacebookController::class, 'icon']);
Route::get('tool/facebook-text/{slug}', [FacebookController::class, 'text']);
Route::get('tool/facebook-text', [FacebookController::class, 'text']);
