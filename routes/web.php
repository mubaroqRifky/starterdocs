<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\views\RolesController;
use App\Http\Controllers\views\UsersController;
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

Route::get('/greeting/{id}', [StudentController::class, 'show']);

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('users', UsersController::class);
Route::resource('roles', RolesController::class);

Route::get('get-started', fn() => view('pages.get-started.index'))->name('get-started');
Route::get('forms', fn() => view('pages.forms.index'))->name('forms.index');
Route::get('tables', fn() => view('pages.tables.index'))->name('tables.index');
