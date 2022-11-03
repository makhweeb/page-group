<?php

use App\Http\Controllers\ContentToolsController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/locale/{locale}', LocaleController::class)->name('locale');
Route::post('/form', FormController::class)->name('form');

// Content tools
Route::prefix('/content-tools')->group(function () {
    Route::post('/content', [ContentToolsController::class, 'save']);
    Route::post('/image/upload', [ContentToolsController::class, 'upload']);
});