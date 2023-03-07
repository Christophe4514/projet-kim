<?php



    Route::resource('users', App\Http\Controllers\UserController::class)->middleware('access:User');
    Route::resource('roles', App\Http\Controllers\RoleController::class)->middleware('access:Role');
    Route::resource('services', App\Http\Controllers\ServiceController::class)->middleware('access:Service');
    Route::resource('details', App\Http\Controllers\DetailController::class)->middleware('access:Detail');
    Route::get('/details_by_service/{id}', [App\Http\Controllers\DetailController::class, 'details']);
    Route::resource('projects', App\Http\Controllers\ProjectController::class)->middleware('access:Project');
    Route::resource('faqs', App\Http\Controllers\FaqController::class)->middleware('access:Faq');
    Route::resource('nouvelles', App\Http\Controllers\NouvelleController::class)->middleware('access:Nouvelle');
    Route::resource('temoignages', App\Http\Controllers\TemoignageController::class)->middleware('access:Temoignage');
    Route::resource('personnels', App\Http\Controllers\PersonnelController::class)->middleware('access:Personnel');
    Route::resource('clientsatisfaits', App\Http\Controllers\ClientSatisfaitController::class)->middleware('access:ClientSatisfait');
    Route::resource('contacts', App\Http\Controllers\ContactController::class)->middleware('access:Contact');
