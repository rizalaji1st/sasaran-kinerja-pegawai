<?php

namespace App\Http\Controllers\Pegawai\ManajemenTargetRealisasiSkp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManajemenTargetSkpController extends Controller
{
    //
    public function create(){
        return view('pages.pegawai.manajemen_target_realisasi_skp.manajemen_target.create');
    }
}
