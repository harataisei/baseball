<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gladeController;  
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

Route::get('/', [gladeController::class,'index']);
Route::get('/scores/{BatterGlade}/edit', [gladeController::class, 'b_input']);
Route::get('/scores/{PitcherGlade}/edit/pitcher',[gladeController::class,'p_input']);
Route::get('/scores/{BatterGlade}/batter_individual',[gladeController::class,'b_individual']);
Route::get('/scores/{PitcherGlade}/pitcher_individual',[gladeController::class,'p_individual']);
Route::put('/scores/{BatterGlade}', [gladeController::class, 'update']);
Route::put('/scores/{PitcherGlade}/pitcher',[gladeController::class,'p_update']);