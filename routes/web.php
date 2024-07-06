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



Auth::routes();

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index']);
Route::get('history', [App\Http\Controllers\FrontEndController::class, 'about'])->name('history');
Route::get('president-message', [App\Http\Controllers\FrontEndController::class, 'president_message'])->name('president-message');
Route::get('mission-vision', [App\Http\Controllers\FrontEndController::class, 'mission_vision'])->name('mission-vision');
Route::get('lifetime-member-list', [App\Http\Controllers\FrontEndController::class, 'lifetime_member_list'])->name('lifetime-member-list');
Route::get('associate-member-list', [App\Http\Controllers\FrontEndController::class, 'associate_member_list'])->name('associate-member-list');
Route::get('general-member-list', [App\Http\Controllers\FrontEndController::class, 'general_member_list'])->name('general-member-list');
Route::get('news', [App\Http\Controllers\FrontEndController::class, 'news'])->name('news');
Route::get('photos', [App\Http\Controllers\FrontEndController::class, 'photos'])->name('photos');
Route::get('videos', [App\Http\Controllers\FrontEndController::class, 'videos'])->name('videos');
Route::get('events', [App\Http\Controllers\FrontEndController::class, 'events'])->name('events');


Route::get('member-login', [App\Http\Controllers\FrontEndController::class, 'member_login'])->name('member-login');
Route::get('member-register', [App\Http\Controllers\FrontEndController::class, 'member_register'])->name('member-register');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
