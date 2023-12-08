<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware(['checkUserRole'])->group(function () {
    // Route mahasiswa
    Route::prefix('mahasiswa')->group(function () {
        Route::get('/dashboard', [MahasiswaController::class, 'dashboard'])->name('mahasiswa.dashboard');
        Route::get('/profile', [MahasiswaController::class, 'profile'])->name('mahasiswa.profile.profile');
        Route::post('/store', [MahasiswaController::class, 'store']);
    
    //     // ... tambahkan route mahasiswa lainnya
    });

    // Route dosen
    Route::prefix('dosen')->group(function () {
        Route::get('/dashboard', [DosenController::class, 'dashboard'])->name('dosen.dashboard');
        // ... tambahkan route dosen lainnya
    });

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        // ... tambahkan route dosen lainnya
    });
});