<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\Admin\CrewAdminController;
use App\Http\Controllers\Admin\TechnologyAdminController;
use App\Http\Controllers\Admin\DestinationAdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/destination', [DestinationController::class, 'index'])->name('destination.index');
Route::get('/destination/{slug}', [DestinationController::class, 'show'])->name('destination.show');

Route::get('/crew', [CrewController::class, 'index'])->name('crew.index');
Route::get('/crew/{slug}', [CrewController::class, 'show'])->name('crew.show');

Route::get('/technology', [TechnologyController::class, 'index'])->name('technology.index');
Route::get('technology/{slug}', [TechnologyController::class, 'show'])->name('technology.show');

Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::resource('destinations', DestinationAdminController::class);
    Route::resource('crewMembers', CrewAdminController::class);
    Route::resource('technologies', TechnologyAdminController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
