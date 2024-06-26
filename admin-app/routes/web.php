<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Models\SubAdmin;
use App\Models\Users;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',[AdminController::class,'view'])->name('all');
Route::get('/subpage',[AdminController::class,'createSubpage'])->name('createSub');
Route::post('/subcreate',[AdminController::class,'createSubadmin'])->name('storeSub');
Route::post('/accept',[AdminController::class,'accept'])->name('accept');
Route::post('/reject/{id}',[AdminController::class,'reject'])->name('reject');


Route::get('/login', [LogController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LogController::class, 'login'])->name('loginControl');



// Route::get('/subadmin',[SubAdminController::class,'view'])->name('suball');
Route::get('/subadmin',[SubAdminController::class,'userTable'])->name('usertable');
Route::get('/usercreatepage',[SubAdminController::class,'createUserPage'])->name('createUser');
Route::post('/usercreate',[SubAdminController::class,'createUser'])->name('storeUser');

Route::get('/user',[UserController::class,'view'])->name('userall');

