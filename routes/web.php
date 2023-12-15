<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\HeroesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewMembersController;

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

Route::get('/master', [CreatorController::class, 'creators'])->name('creators');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/addmember', [DashboardController::class, 'addmember'])->name('addmember');
Route::post('/insertdata', [DashboardController::class, 'insertdata'])->name('insertdata');
Route::get('/viewdata/{npm}', [DashboardController::class, 'viewdata'])->name('viewdata');
Route::post('/updatedata/{npm}', [DashboardController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{npm}', [DashboardController::class, 'deletedata'])->name('deletedata');

Route::get('/members', [ViewMembersController::class, 'members'])->name('members');

Route::get('/heroes', [HeroesController::class, 'fetchHeroList'])->name('fetchHeroList');
Route::get('/heroes/{hero_id}', [HeroesController::class, 'hero'])->name('hero');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproc', [LoginController::class, 'loginproc'])->name('loginproc');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('heroes','Heroes@')
