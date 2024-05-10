<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::group([
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Admin',
    'middleware' => ['auth', 'CekRole:super,admin,user']
], function () {
    // Route Log Data User
    Route::resource('dashboard', 'DashboardController');
});


Route::group([
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Auth',
], function () {
    // Route Log Data User
    Route::resource('auth', 'AuthController')->names([
        'index' => 'login',
    ]);
    Route::get('/logout', 'AuthController@logout')->name('logout');
});
