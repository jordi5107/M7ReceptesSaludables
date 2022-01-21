<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\FrontPageController;
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

Route::get('/', [FrontPageController::class, 'index'])->name('home');

Route::get('/receptes/{post}', [FrontPageController::class, 'show'])->name('recipe');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{categoryId}/', [CategoryController::class, 'show'])->name('category');

Route::post('/recipe/write-comment', [CommentController::class, 'store'])->name('write comment');
Route::get('/recipe/delete-comment/{id}', [CommentController::class, 'destroy'])->name('delete comment');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){

    Route::resource('recipes', RecipeController::class);

    Route::resource('categories', CategoryController::class);


});