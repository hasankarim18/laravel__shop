<?php

use Illuminate\Support\Facades\Route;
// Front end controller
use App\Http\Controllers\Frontend\PagesController;


// Backend controller 

use App\Http\Controllers\Backend\DashboardController;

/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [PagesController::class, "home"]);

/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix'=> 'admin'],function()
{
   Route::get('/dashboard', [DashboardController::class, "dashboard"]);
});

