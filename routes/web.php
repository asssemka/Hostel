<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/hotel', [MainController::class, 'hotel'])->name('hotel');

Route::get('/review', [MainController::class, 'review'])->name('review');

Route::get('/reviews', [MainController::class, 'reviews'])->name('reviews');

Route::post('/review/check', [MainController::class, 'review_check'])->name('review_check');

Route::get('posts/index', [PostController::class, 'index'])->name('index');
Route::get('posts/create', [PostController::class, 'create'])->name('create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts', [PostController::class, 'update'])->name('update');
Route::get('posts', [PostController::class, 'delete'])->name('delete');

//Route::post('/posts', [MainController::class, 'store'])->name('posts.store');












//Route::get('about/{id}/{name}', function ($id, $name) {
//    return 'ID:' .$id.  '. NAME:' . $name;
//});

//Route::get('home', function () {
//  return view('home');
//});
