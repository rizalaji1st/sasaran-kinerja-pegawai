<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ManajemenAkun\ManajemenAkunController;
use App\Http\Controllers\Admin\ManajemenRefUnit\ManajemenRefUnitController;
use App\Http\Controllers\Admin\ManajemenRefJabatan\ManajemenRefJabatanController;
use App\Http\Controllers\Admin\ManajemenPegawai\ManajemenPegawaiController;
use App\Http\Controllers\Admin\ManajemenUraianPekerjaan\ManajemenUraianPekerjaanController;
use App\Http\Controllers\Admin\ManajemenTargetSkpPegawai\ManajemenTargetSkpPegawaiController;
use App\Http\Controllers\Admin\ManajemenUraianPekerjaanJabatan\ManajemenUraianPekerjaanJabatanController;
use App\Http\Controllers\Pegawai\ManajemenTargetRealisasiSkp\ManajemenTargetRealisasiSkpController;
use App\Http\Controllers\Pegawai\ManajemenTargetRealisasiSkp\ManajemenRealisasiSkpController;
use App\Http\Controllers\Pegawai\ManajemenTargetRealisasiSkp\ManajemenTargetSkpController;


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

            Route::namespace('ManajemenRefUnit')
                ->prefix('manajemen-ref-unit')
                ->name('manajemen-ref-unit.')
                ->group(function(){
                    Route::get('/', [ManajemenRefUnitController::class, 'index']);
                    Route::get('/create', [ManajemenRefUnitController::class, 'create']);
                    Route::post('/create/store', [ManajemenRefUnitController::class, 'store']);
                    Route::get('/update/{ref_unit}', [ManajemenRefUnitController::class, 'update']);
                    Route::post('/update/{ref_unit}/store', [ManajemenRefUnitController::class, 'updateStore']);
                    Route::post('/delete/{ref_unit}', [ManajemenRefUnitController::class, 'delete']);
                });
            Route::namespace('ManajemenRefJabatan')
                ->prefix('manajemen-ref-jabatan')
                ->name('manajemen-ref-jabatan.')
                ->group(function(){
                    Route::get('/', [ManajemenRefJabatanController::class, 'index']);
                    Route::get('/create', [ManajemenRefJabatanController::class, 'create']);
                    Route::post('/create/store', [ManajemenRefJabatanController::class, 'store']);
                    Route::get('/update/{ref_jabatan}', [ManajemenRefJabatanController::class, 'update']);
                    Route::post('/update/{ref_jabatan}/store', [ManajemenRefJabatanController::class, 'updateStore']);
                    Route::post('/delete/{ref_jabatan}', [ManajemenRefJabatanController::class, 'delete']);
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
                    Route::get('/{jabatan}', [ManajemenUraianPekerjaanJabatanController::class, 'jabatanIndex']);
                    Route::get('/create/{jabatan}', [ManajemenUraianPekerjaanJabatanController::class, 'create']);
                    Route::post('/create/{jabatan}/store', [ManajemenUraianPekerjaanJabatanController::class, 'store']);
                    Route::get('/update/{uraian_pekerjaan_jabatan}', [ManajemenUraianPekerjaanJabatanController::class, 'update']);
                    Route::post('/update/{uraian_pekerjaan_jabatan}/store', [ManajemenUraianPekerjaanJabatanController::class, 'updateStore']);
                    Route::post('/delete/{uraian_pekerjaan_jabatan}', [ManajemenUraianPekerjaanJabatanController::class, 'delete']);
                    Route::post('/undelete/{uraian_pekerjaan_jabatan}', [ManajemenUraianPekerjaanJabatanController::class, 'undelete']);
                });
                
        });

Route::namespace('Pegawai')
        ->prefix('pegawai')
        ->name('pegawai.')
        ->middleware('can:are-pegawai')
        ->group(function (){
            Route::namespace('ManajemenTargetRealisasiSkp')
                ->prefix('manajemen-target-realisasi-skp')
                ->name('manajemen-target-realisasi-skp.')
                ->group(function(){
                    Route::get('/', [ManajemenTargetRealisasiSkpController::class, 'index']);
                    Route::get('/periode/{periode}', [ManajemenTargetRealisasiSkpController::class, 'periode']);
                    Route::post('/target/create/store', [ManajemenTargetRealisasiSkpController::class, 'store']);
                });
            // Route::namespace('ManajemenTargetRealisasiSkp')
            //     ->prefix('manajemen-target')
            //     ->name('manajemen-target-skp.')
            //     ->group(function(){
            //         Route::get('/create', [ManajemenTargetSkpController::class, 'create']);
            //         Route::post('/create/store', [ManajemenTargetSkpController::class, 'store']);
            //         Route::get('/update/{uraian_pekerjaan_jabatan}', [ManajemenTargetSkpController::class, 'update']);
            //         Route::post('/update/{uraian_pekerjaan_jabatan}/store', [ManajemenTargetSkpController::class, 'updateStore']);
            //         Route::post('/delete/{uraian_pekerjaan_jabatan}', [ManajemenTargetSkpController::class, 'delete']);
            //     });     
        });