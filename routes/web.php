<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WebPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
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

Route::get('/', [WebPostController::class, 'index'])->name('home');

Route::get('/post/{post}', [WebPostController::class, 'show'])->name('post');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{categoryId}/', [CategoryController::class, 'show'])->name('category');

Route::post('/post/write-comment', [CommentController::class, 'store'])->name('write comment');
Route::get('/post/delete-comment/{id}', [CommentController::class, 'destroy'])->name('delete comment');

Route::resource('posts', PostController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () { return redirect(route('posts.index'));})->name('dashboard');

