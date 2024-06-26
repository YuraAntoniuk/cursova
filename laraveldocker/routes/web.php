<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');
    Route::resource('category',\App\Http\Controllers\Category\CategoryController::class);
    Route::resource('group',\App\Http\Controllers\Group\GroupController::class);
    Route::resource('tag',\App\Http\Controllers\Tag\TagController::class);
    Route::resource('color', \App\Http\Controllers\Color\ColorController::class);
    Route::resource('user',\App\Http\Controllers\User\UniverseController::class);
    Route::resource('product', \App\Http\Controllers\Product\ProductController::class);


