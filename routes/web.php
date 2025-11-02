<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DienstenController;
use App\Http\Controllers\PaginasController;

Route::get('/', function () { return view('welcome'); });
Route::get('/diensten/{slug}', [DienstenController::class, 'show'])->name('diensten.show');
Route::get('/over-ons',  [PaginasController::class, 'overOns']) ->name('overons');