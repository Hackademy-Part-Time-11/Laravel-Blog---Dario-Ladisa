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

// HOME
Route::get('/',[App\Http\Controllers\PageController::class,'shome']) -> name('home');

// CHI SONO
Route::get('/chi_sono',[App\Http\Controllers\PageController::class,'shofunc']) -> name('chi_sono');

// PRODOTTI (ARTICLES)
Route::get('/articles', [App\Http\Controllers\ArticleController::class,'index']) -> name('articles');

// CONTATTI
Route::get('/contatti', [App\Http\Controllers\PageController::class, 'showCont']) -> name('contatti');
 
//ARTICLE
Route::get('/article/{id}', [App\Http\Controllers\ArticleController::class,'show']) -> name('article'); 

//USER LOGIN 
Route::get('/login', [App\Http\Controllers\PageController::class, 'userLogin']) -> name('login');

