<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('articles', [App\Http\Controllers\ArticleController::class],'index');
Route::get('articles/{article}',[App\Http\Controllers\ArticleController::class],'show');

Route::post('articles',[App\Http\Controllers\ArticleController::class],'store');

Route::put('articles/{article}', [App\Http\Controllers\ArticleController::class],'update');

Route::delete('articles/{article}',[App\Http\Controllers\ArticleController::class],'destroy');
