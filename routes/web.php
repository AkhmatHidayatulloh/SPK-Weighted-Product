<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Models\soal;

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
    // Route
    Route::resource('dashboard', 'DashboardController');

    Route::resource('user', 'UserController');
    Route::resource('vendor', 'VendorController');
    Route::resource('category', 'CategoryController');
    Route::resource('soal', 'SoalController');
    Route::resource('jawaban', 'JawabanController');
    Route::resource('quisioner', 'QuisionerController');
    Route::resource('perhitungan', 'HitungSpkController');
});


Route::resource('auth', AuthController::class)->names([
    'index' => 'login',
]);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::fallback(function () {
    return redirect()->route('dashboard.index');
});
