<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\Frontend\FrontController::class, 'index']);
Route::get('/about', [App\Http\Controllers\Frontend\FrontController::class, 'about']);
Route::get('/service', [App\Http\Controllers\Frontend\FrontController::class, 'service']);
Route::get('/contact', [App\Http\Controllers\Frontend\FrontController::class, 'contact']);
Route::get('/signup', [App\Http\Controllers\Frontend\FrontController::class, 'signup']);
Route::post('/signup', [App\Http\Controllers\Frontend\FrontController::class, 'store']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::prefix('admin')->middleware('auth','isAdmin')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::get('view-team',[App\Http\Controllers\Admin\TeamController::class, 'index']);
    Route::get('add-team',[App\Http\Controllers\Admin\TeamController::class, 'create']);
    Route::post('add-team',[App\Http\Controllers\Admin\TeamController::class, 'store']);
    Route::get('edit-team/{team_id}',[App\Http\Controllers\Admin\TeamController::class, 'edit']);
    Route::put('update-team/{team_id}',[App\Http\Controllers\Admin\TeamController::class, 'update']);
    Route::get('delete-team/{post_id}', [App\Http\Controllers\Admin\TeamController::class, 'destroy']);

});
