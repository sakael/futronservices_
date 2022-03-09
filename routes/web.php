<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CareerController,PageController,LeadershipController};

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
    return view('pages.home',['seo'=>array('title' => 'Home','description' => 'FutronAviation')]);
})->name('home');

Route::get('/leadership',[LeadershipController::class, 'index'])->name('leadership');
Route::get('/careers',[CareerController::class, 'index'])->name('career');
Route::get('/contact',[PageController::class, 'contact'])->name('contact');
Route::get('/{page_slug}',[PageController::class, 'index'])->name('pageRoute');

