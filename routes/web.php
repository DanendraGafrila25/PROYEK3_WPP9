<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\cvController;
use App\Http\Controllers\RiwayatDiriController;
use App\Models\RiwayatDiri;

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

require __DIR__.'/auth.php';

Route::get('/', [PublicController::class, 'index']);
Route::get('/Danendra', [PublicController::class, 'Danendra']);
Route::get('/Fahrizal', [PublicController::class, 'Fahrizal']);
Route::get('/Faras', [PublicController::class, 'Faras']);
Route::get('/CurriculumVitaes', [PublicController::class, 'CurriculumVitaes']);
Route::get('/MyCV', [PublicController::class, 'MyCV']);

// Route Data Diri
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/cv-dashboard', [cvController::class, 'index']);
// Rute untuk menampilkan formulir pembuatan CV
Route::get('/addCV-create', [cvController::class, 'create'])->name('addCV-create');
// Rute untuk menyimpan data CV
Route::post('/addCV-store', [cvController::class, 'save'])->name('addCV-store');
// Route untuk get data
Route::get('addCV-edit/{id}', [cvController::class, 'Edit']);
// Route untuk Update data
Route::post('/addCV-update', [cvController::class, 'update'])->name('addCV-update-cv');
// Route untuk Delete data
Route::delete('/addCV-delete/{id}', [cvController::class, 'delete'])->name('addCV-delete-cv');

//Route Riwayat Diri
Route::get('/addRiwayat-create', [RiwayatDiriController::class, 'create'])->name('addRiwayat-create');
Route::post('/addRiwayat-store', [RiwayatDiriController::class, 'save'])->name('addRiwayat-store');
Route::get('addCV-detail/{id}', [cvController::class, 'Getid']);
Route::get('detail-edit/{id}', [RiwayatDiriController::class, 'Edit']);
Route::post('/Riwayat-update', [RiwayatDiriController::class, 'update'])->name('Riwayat-update-cv');




    // Route::controller(cvController::class)->group(function () {
    //     Route::get('/addCV', 'index');
    //     // Route::get('/addCV-riwayatPendidikan', 'riwayatPendidikan');
    //     // Route::get('/addCV-create', 'create');
    //     Route::post('/addCV-store', 'save');
    //     Route::get('/addCV/{id}', 'show');
    //     Route::post('/addCV/{id}', 'update');
    //     Route::get('/addCV-delete/{id}', 'delete');
        
    // });
// });


