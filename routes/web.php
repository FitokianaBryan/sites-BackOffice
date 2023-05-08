<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuteurController;
use App\Http\Controllers\ArticleController;

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
    return view('index');
});
Route::post('/Signin',AuteurController::class . '@Signin');
Route::get('/Home',AuteurController::class .'@ToHome')->name("Home");
Route::get('/ToSignup',function() { return view('Signup'); });
Route::post('/Signup',AuteurController::class . '@Signup');
Route::get('/ForgetPass',function() { return view('ForgetPassword'); });
Route::post('/ResetPass',AuteurController::class . '@ForgetPassword');
Route::get('/Logout',AuteurController::class . '@Logout');

Route::get('/ToSearch',function() { return view('Search',["liste_article" => ""]); });
Route::post('/Search',ArticleController::class . '@Search');
Route::get('/Details/{slug}',ArticleController::class . '@getDetails');
Route::get('/ToAddArticle',ArticleController::class . '@ToAddArticle');
Route::post('/addArticle',ArticleController::class . '@CreateArticle');
Route::get('/ToUpdateArticle/{slug}',ArticleController::class . '@ToUpdateArticle');
Route::post('/UpdateArticle',ArticleController::class . '@UpdateArticle');
Route::get('/DeleteArticle/{slug}',ArticleController::class . '@DeleteArticle');
Route::get('/ReAddArticle/{slug}',ArticleController::class . '@ReAddArticle');
Route::get('/ExportPDF/{slug}',ArticleController::class . '@ExportPDF');
