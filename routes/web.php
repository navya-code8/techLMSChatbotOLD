<?php

use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return File::get(public_path('chatbotTest.html'));
});
