<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;

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




Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('about',[FrontendController::class,'about'])->name('about');
Route::get('blog',[FrontendController::class,'blog'])->name('blog');

Route::get('contact',[FrontendController::class,'contact'])->name('contact');
Route::get('portfolio',[FrontendController::class,'portfolio'])->name('portfolio');
Route::get('contactcreate',[FrontendController::class,'contactcreate'])->name('contactcreate');
Route::post('contactstore',[ContactController::class,'contactstore'])->name(
    'contactstore');
