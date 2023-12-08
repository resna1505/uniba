<?php

use App\Http\Controllers\MahasiswaController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create-mahasiswa', [MahasiswaController::class, 'createData']);
Route::get('/get-mahasiswa/{id}', [MahasiswaController::class, 'getData']);
Route::get('/get-all-mahasiswa', [MahasiswaController::class, 'getAllData']);
Route::get('/search-mahasiswa', [MahasiswaController::class, 'searchData']);
Route::patch('/update-mahasiswa/{id}', [MahasiswaController::class, 'updateData']);
Route::delete('/delete-mahasiswa/{id}', [MahasiswaController::class, 'deleteData']);
