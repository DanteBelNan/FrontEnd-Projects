<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;

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

Route::prefix('home')->namespace('home')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});

Route::prefix('projects')->namespace('projects')->group(function(){
    //Route::get('/PRNAME', [ProjectsController::class, 'method'])->name('projects.PRNAME');

});
