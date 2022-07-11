<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
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
Route::get('/', [MainController::class, 'mainpage'])->name('mainpage');

Route::get('/catalog', [MainController::class, 'catalog'])->name('catalog');

Route::get('/ajax_call', [MainController::class, 'ajax_call'])->name('ajax_call');

Route::get('edit_ticket_window', [MainController::class, 'edit_ticket_window'])->name('edit_ticket_window');

Route::get('/ajax_call/save_ticket', [MainController::class, 'save_ticket'])->name('save_ticket');

Route::get('/login', [MainController::class, 'login'])->name('login');

Route::get('/register', [MainController::class, 'register'])->name('register');

Route::post('/register/check', [AuthController::class, 'register_check'])->name('register_check');

Route::post('/login/check', [AuthController::class, 'login_check'])->name('login_check');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Route::post('/mainpage/db_users', [MainController::class, 'home_db_users']);
//
//Route::get('/user/{id}/{name}', function ($id,$name) {
//    return $id."__".$name;
//});
