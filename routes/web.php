<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/{urlx}', [LinkController::class, 'linkstrees']);
