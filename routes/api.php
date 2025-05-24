<?php

use App\Http\Controllers\ChatbotController;
use Illuminate\Support\Facades\Route;

Route::post('/ask', [ChatbotController::class, 'ask']);
