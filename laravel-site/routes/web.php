<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\SiteController::class,'showHome']);


Route::get('/About',[\App\Http\Controllers\SiteController::class,'showAbout']);



Route::get('/Service',[\App\Http\Controllers\SiteController::class,'showService']);



Route::get('/Portfolio',[\App\Http\Controllers\SiteController::class,'showPortfolio']);
