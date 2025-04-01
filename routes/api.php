<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriberController;
Route::post('/websites/{websiteId}/posts', [PostController::class, 'store']);

Route::post('/websites/{websiteId}/subscribe', [SubscriberController::class, 'subscribe']);