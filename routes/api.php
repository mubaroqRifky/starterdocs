<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\panenqu\AboutController;
use App\Http\Controllers\panenqu\ContactController;
use App\Http\Controllers\panenqu\EventController;
use App\Http\Controllers\panenqu\HomeController;
use App\Http\Controllers\panenqu\MitraController;
use App\Http\Controllers\panenqu\ProdukController;
use App\Http\Controllers\panenqu\SosialController;
use App\Http\Controllers\panenqu\StoreController;
use App\Http\Controllers\revamp\LP2KPKController;
use App\Http\Controllers\revamp\PBBController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\wbs\WBSController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['api'], function () {
    Route::get('/generate/{value}', [StudentController::class, 'index']);

    Route::post('/login', [AuthController::class, 'index']);

    Route::get('/login_app', [AuthController::class, 'login_app']);

    /*
    |--------------------------------------------------------------------------
    | API PANENQU Routes
    |--------------------------------------------------------------------------
    */
    // Route::get('/home', [HomeController::class, 'index']);

    Route::get('/about', [AboutController::class, 'index']);

    Route::get('/sosial', [SosialController::class, 'index']);

    Route::get('/produk', [ProdukController::class, 'index']);

    Route::get('/produk/{id}', [ProdukController::class, 'show']);

    Route::resource('/mitra', MitraController::class);

    Route::get('/store', [StoreController::class, 'index']);

    Route::resource('/contact', ContactController::class);

    Route::resource('/event', EventController::class);

    /*
    |--------------------------------------------------------------------------
    | API REVAMP Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'revamp'], function () {
        Route::resource('/pbb', PBBController::class);
        Route::resource('/lp2kpk', LP2KPKController::class);
    });

    /*
    |--------------------------------------------------------------------------
    | API WBS Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'wbs'], function () {
        Route::resource('/report', WBSController::class);
    });
});
