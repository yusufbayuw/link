<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return Redirect::away(config('base_urls.base_home'));
});
Route::get('/{urlx}', [LinkController::class, 'linkstrees']);
