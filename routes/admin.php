<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::view('pages/index','pages.home');
Route::view('pages/about', 'pages.about');
Route::view('pages/contact', 'pages.contact');
Route::view('pages/causes', 'pages.causes');
Route::view('pages/news', 'pages.news');





require __DIR__.'/admin.php';

require __DIR__ . '/auth.php';