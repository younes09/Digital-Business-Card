<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CardWatcherController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cards', [CardController::class, 'Mycards']);
Route::get('/newCard', [CardController::class, 'addCard']);
Route::post('/insertNewCard', [CardController::class, 'InsertNewCard'])->name('InsertNewCard');
Route::get('/deletCard{id_card}', [CardController::class, 'deletCard']);
Route::get('/editMyCard{id}', [CardController::class, 'editMyCard']);
Route::post('/updatCardInfo{id}', [CardController::class, 'UpdatCardInfo']);
Route::get('/cardWatch{id}', [CardWatcherController::class, 'watchCardInfo']);
Route::get('/contact', [CardController::class, 'showContact']);
Route::get('/deletContact{card_id}', [CardController::class, 'DeletContact']);
Route::get('/addContact{card_id}', [CardController::class, 'AddContact']);
Route::get('/deletUser{u_id}', [CardController::class, 'deletUser']);
Route::get('/updatePasswordView', [CardController::class, 'updatePasswordView']);
Route::post('/update-password', [CardController::class, 'updatePassword']);
Route::get('/logout', [AdminController::class ,'flush']);
