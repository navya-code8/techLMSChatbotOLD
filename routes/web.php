<?php

use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return File::get(public_path('chatbotTest.html'));
});

Route::get('/test-api', function () {
    return response()->json(['message' => 'API route is working!']);
});
