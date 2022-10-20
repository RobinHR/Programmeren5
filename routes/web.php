<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootballplayerController;

Route::get('/', [HomeController::class, 'show']);

Route::get('/about', [AboutController::class, 'show']);

Route::get('search/filter', [App\Http\Controllers\SearchController::class, 'filter'])->name('search.filter');

Route::resource('search', \App\Http\Controllers\SearchController::class)->except('show');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'show'])->name('home');

//Route::get('/index', [App\Http\Controllers\FootballplayerController::class, 'index'])->name('index');

//Route::get('/footballplayers/index', [FootballplayerController::class, 'index']);
//Route::post('/footballplayers/create', [FootballplayerController::class, 'create']);

Route::resource('footballplayers',FootballplayerController::class);

Route::post('footballplayers/{footballplayers}/active', [FootballplayerController::class, 'active'])->name('footballplayers.active');

Route::resource('users', \App\Http\Controllers\UserController::class);
