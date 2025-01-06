<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return Redirect::away(env('BASE_LINK'));
});
Route::get('/{urlx}', [LinkController::class, 'linkstrees']);
