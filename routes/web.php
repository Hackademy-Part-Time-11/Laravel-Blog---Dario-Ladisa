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
 
//ARTICLE
Route::get('/article/{id}', [App\Http\Controllers\ArticleController::class,'show']) -> name('article'); 

//USER LOGIN 
Route::get('/login', [App\Http\Controllers\PageController::class, 'userLogin']) -> name('login');

//GET FORM
Route::get('/contatti', [App\Http\Controllers\ContactController::class, 'viewForm']) -> name('contatti');

//POST FORM
Route::post('/contatti/invia', [App\Http\Controllers\ContactController::class, 'sendForm']) -> name('contatti.sendForm');

