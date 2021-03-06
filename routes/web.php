<?php

use App\Http\Controllers\PeopleController;
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

Route::get('/', [PeopleController::class, "index"]);
Route::get('/create', [PeopleController::class, "create"]);
Route::get('/show_people/{id}', [PeopleController::class, "show"]);
Route::get('/edit_people/{id}', [PeopleController::class, "edit"]);

Route::post('/add_people', [PeopleController::class, "store"]);
Route::post('/delete_people/{id}', [PeopleController::class, "destroy"]);
Route::post('/update_people/{id}', [PeopleController::class, "update"]);
Route::post('/delete_all', [PeopleController::class, "destroyAll"]);