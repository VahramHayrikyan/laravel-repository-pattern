<?php

use App\Http\Controllers\Web\Admin\DashboardController;
use App\Http\Controllers\Web\Admin\ProductsController;
use App\Http\Controllers\Web\Admin\Users\NotesController;
use App\Http\Controllers\Web\Admin\UsersController;
use Illuminate\Support\Facades\Route;



Route::group([], function (){
    Route::get('/',[DashboardController::class,'index']);
    Route::resource('products',ProductsController::class);
    Route::resource('users', UsersController::class);
    Route::put('users/ban/{id}',[UsersController::class,'banUser'])->name('users.ban');
    Route::resource('users.notes',NotesController::class)->except('show');
    Route::get('/notes',[NotesController::class,'show']);
    Route::get('/points_activity',[DashboardController::class,'pointsActivity']);
    Route::get('/credits_activity',[DashboardController::class,'creditsActivity']);
    Route::get('/banned',[DashboardController::class,'creditsActivity']);

});
