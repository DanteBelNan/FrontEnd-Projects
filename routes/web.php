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

    Route::get('/{name}', [ProjectsController::class, 'show'])->name('projects.show');
    Route::get('/create', [ProjectsController::class, 'create'])->name('projects.create');
    Route::post('/store', [ProjectsController::class, 'store'])->name('projects.store');
    Route::get('/edit/{id}', [ProjectsController::class, 'edit'])->name('projects.edit');
    Route::post('/update', [ProjectsController::class, 'update'])->name('projects.update');
});
