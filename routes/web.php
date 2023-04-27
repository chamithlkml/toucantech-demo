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
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SchoolController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/members/create', [MemberController::class, 'create']);
Route::post('/members/store', [MemberController::class, 'store']);
Route::get('/members/show', [MemberController::class, 'show']);
Route::get('/schools/{id}/members', [SchoolController::class, 'get']);