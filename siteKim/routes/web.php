<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['auth']], function() {
    require_once('admin_routes.php');
    Route::get('/home',[AdminController::class,'dashboard'])->name('home');
    });

Route::get('/', [App\Http\Controllers\ClientController::class, 'index']);

//toute client
Route::get('/service', [App\Http\Controllers\ClientController::class, 'services']);
Route::get('/about', [App\Http\Controllers\ClientController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\ClientController::class, 'contact']);
Route::get('/temoignage', [App\Http\Controllers\ClientController::class, 'temoignage']);
Route::get('/faq', [App\Http\Controllers\ClientController::class, 'faq']);
Route::get('/project', [App\Http\Controllers\ClientController::class, 'project']);
Route::get('/team', [App\Http\Controllers\ClientController::class, 'team']);
Route::get('/news', [App\Http\Controllers\ClientController::class, 'news']);
Route::get('/detail_service/{id}', [App\Http\Controllers\ClientController::class, 'details']);
Route::get('/detail_project/{id}', [App\Http\Controllers\ClientController::class, 'singleProject']);



//require_once('client_route.php');

 Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

>>>>>>> 7a4a3eb84830e7feab839ea7ea6feb832b3126b1
