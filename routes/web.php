<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home']);

Route::get('/projects', [PageController::class, 'projects']);

Route::get('/projects/{id}', [PageController::class, 'projectDetails']);

Route::get('/work-experiences', [PageController::class, 'workExperiences']);