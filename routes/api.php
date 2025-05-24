<?php

use App\Http\Controllers\ChatbotController;
use Illuminate\Support\Facades\Route;

Route::post('/ask', [ChatbotController::class, 'ask']);

Route::get('/test', function () {
    return response()->json(['message' => 'API GET test route works']);
});
