<?php

use App\Http\Controllers\MembersController;
use App\Http\Controllers\SchoolController;
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

Route::get('/members', [MembersController::class, 'index'])->name('members.index');
Route::get('/members/show', [MembersController::class, 'show'])->name('members.show');
Route::get('/members/create', [MembersController::class, 'create'])->name('members.create');
Route::get('/school/create', [SchoolController::class, 'create'])->name('school.create');
Route::post('/school/create', [SchoolController::class, 'store'])->name('school.store');
Route::post('/members', [MembersController::class, 'store'])->name('members.store');

