<?php



    Route::resource('users', App\Http\Controllers\UserController::class)->middleware('access:User');
    Route::resource('roles', App\Http\Controllers\RoleController::class)->middleware('access:Role');
    Route::resource('services', App\Http\Controllers\ServiceController::class)->middleware('access:Service');

