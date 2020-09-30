<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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



Route::get('post', PostController::class.'@create')->name('post.create');
Route::post('post', PostController::class.'@store')->name('post.store');
Route::get('/posts', PostController::class.'@index')->name('posts');
Route::get('/article/{post:slug}', PostController::class.'@show')->name('post.show');
Route::post('/comment/store', CommentController::class.'@store')->name('comment.add');
Route::post('/reply/store', CommentController::class.'@replyStore')->name('reply.add');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
