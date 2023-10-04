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

Route::get('/',[App\Http\Controllers\PageController::class,'shome']) -> name('home');

Route::get('/chi_sono',[App\Http\Controllers\PageController::class,'shofunc']) -> name('chi_sono');

Route::get('/articles', [App\Http\Controllers\ArticleController::class,'index']) -> name('articles');
 
Route::get('/article/{id}', [App\Http\Controller\ArticleController::class,'show']) -> name('article'); 

