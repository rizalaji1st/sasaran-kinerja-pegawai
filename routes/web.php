<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ManajemenAkun\ManajemenAkunController;
use App\Http\Controllers\Admin\ManajemenPegawai\ManajemenPegawaiController;
use App\Http\Controllers\Admin\ManajemenUraianPekerjaan\ManajemenUraianPekerjaanController;
use App\Http\Controllers\Admin\ManajemenUraianPekerjaanJabatan\ManajemenUraianPekerjaanJabatanController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::namespace('Admin')
        ->prefix('admin')
        ->name('admin.')
        ->middleware('can:are-admin')
        ->group(function (){
            Route::get('/', [AdminController::class, 'index']);
            Route::namespace('ManajemenAkun')
                ->prefix('manajemen-akun')
                ->name('manajemen-akun.')
                ->group(function(){
                    Route::get('/', [ManajemenAkunController::class, 'index']);
                    Route::get('/create', [ManajemenAkunController::class, 'create']);
                    Route::post('/create/store', [ManajemenAkunController::class, 'store']);
                    Route::get('/update/{user}', [ManajemenAkunController::class, 'update']);
                    Route::post('/update/{user}/store', [ManajemenAkunController::class, 'updateStore']);
                    Route::post('/delete/{user}', [ManajemenAkunController::class, 'delete']);
                });

            Route::namespace('ManajemenPegawai')
                ->prefix('manajemen-pegawai')
                ->name('manajemen-pegawai.')
                ->group(function(){
                    Route::get('/', [ManajemenPegawaiController::class, 'index']);
                    Route::get('/create/{user}', [ManajemenPegawaiController::class, 'create']);
                    Route::post('/create/{user}/store', [ManajemenPegawaiController::class, 'store']);
                    Route::get('/update/{pegawai}', [ManajemenPegawaiController::class, 'update']);
                    Route::post('/update/{pegawai}/store', [ManajemenPegawaiController::class, 'updateStore']);
                    Route::post('/delete/{pegawai}', [ManajemenPegawaiController::class, 'delete']);
                });

            Route::namespace('ManajemenUraianPekerjaan')
                ->prefix('manajemen-uraian-pekerjaan')
                ->name('manajemen-uraian-pekerjaan.')
                ->group(function(){
                    Route::get('/', [ManajemenUraianPekerjaanController::class, 'index']);
                    Route::get('/create', [ManajemenUraianPekerjaanController::class, 'create']);
                    Route::post('/create/store', [ManajemenUraianPekerjaanController::class, 'store']);
                    Route::get('/update/{uraian_pekerjaan}', [ManajemenUraianPekerjaanController::class, 'update']);
                    Route::post('/update/{uraian_pekerjaan}/store', [ManajemenUraianPekerjaanController::class, 'updateStore']);
                    Route::post('/delete/{uraian_pekerjaan}', [ManajemenUraianPekerjaanController::class, 'delete']);
                });
            
                Route::namespace('ManajemenUraianPekerjaanJabatan')
                ->prefix('manajemen-uraian-pekerjaan-jabatan')
                ->name('manajemen-uraian-pekerjaan-jabatan.')
                ->group(function(){
                    Route::get('/', [ManajemenUraianPekerjaanJabatanController::class, 'index']);
                    Route::get('/create', [ManajemenUraianPekerjaanJabatanController::class, 'create']);
                    Route::post('/create/store', [ManajemenUraianPekerjaanJabatanController::class, 'store']);
                    Route::get('/update/{uraian_pekerjaan_jabatan}', [ManajemenUraianPekerjaanJabatanController::class, 'update']);
                    Route::post('/update/{uraian_pekerjaan_jabatan}/store', [ManajemenUraianPekerjaanJabatanController::class, 'updateStore']);
                    Route::post('/delete/{uraian_pekerjaan_jabatan}', [ManajemenUraianPekerjaanJabatanController::class, 'delete']);
                });
                
        });