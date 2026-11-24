<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\DiaryController;

Route::get('/', [DeviceController::class, 'index']);
Route::get('{category}/{ajax}/photos', [PhotosController::class, 'index']);
Route::get('/diary', [DiaryController::class, 'index']);
Route::get('/{detail}', [DiaryController::class, 'detail']);