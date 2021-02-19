<?php

use App\Http\Controllers\HiringController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/', [ProjectController::class, 'list']);

Route::get('/projects', [ProjectController::class, 'list']);
Route::get('/projects/create', [ProjectController::class, 'create']);
Route::post('/projects/store', [ProjectController::class, 'store']);

Route::get('/project/{id}/hiring', [HiringController::class, 'home']);
Route::get('/project/{projectId}/hiring/{profileId}', [HiringController::class, 'search']);
