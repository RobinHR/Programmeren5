<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootballplayerController;

Route::get('/', [HomeController::class, 'show']);

Route::get('/about', [AboutController::class, 'show']);

Route::resource('search', \App\Http\Controllers\SearchController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'show'])->name('home');

Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/index', [FootballplayerController::class, 'index']);
Route::post('add', [FootballplayerController::class, 'add']);

Route::resource('footballplayer',FootballplayerController::class);

Route::resource('user', \App\Http\Controllers\UserController::class);
