<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Manage\CategoryController;
use App\Http\Controllers\Manage\RoleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('article', 'article');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::group(['prefix' => 'manage', 'as' => 'manage.'], function () {
        Route::resources([
            'roles' => RoleController::class,
            'categories' => CategoryController::class,
        ]);
    });
});
