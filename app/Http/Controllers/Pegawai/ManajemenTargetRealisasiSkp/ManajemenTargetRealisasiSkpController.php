<?php

namespace App\Http\Controllers\Pegawai\ManajemenTargetRealisasiSkp;

use App\Http\Controllers\Controller;
use App\Models\SkpTarget;
use App\Models\SkpRealisasi;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Periode;
use App\Models\RefJabatan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ManajemenTargetRealisasiSkpController extends Controller
{
    public function index(){
        $periodes = Periode::all();
        return view('pages.pegawai.manajemen_target_realisasi_skp.index', compact('periodes'));
    }

    public function periode(Periode $periode){
        $pegawais = Pegawai::all();
        $refJabatan = RefJabatan::all();
        $user = Auth::user();
        $skp_targets = SkpTarget::all();

        return view('pages.pegawai.manajemen_target_realisasi_skp.periode', compact('skp_targets','user', 'periode','pegawais','refJabatan'));
    }

    public function store(Request $request){
        $data = $request->except(['_token']);
        $auth = Auth::user();
        $skp_target = SkpTarget::create([
            'id_pegawai' => $data['pegawai'],
            'id_uraian_pekerjaan_jabatan' => $data['uraian_pekerjaan_jabatan'],	
            'jml_target'	=> (int) $data['jml_target'],
            'id_periode' => (float) $data['periode'],
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $auth->id
        ]);

        return redirect('/pegawai/manajemen-target-realisasi-skp/periode/'.$skp_target->id_periode)->with('success','Data target berhasil ditambahkan');
    }

    public function delete(SkpTarget $skp_target){
        $skp_target->delete();
        return redirect('/pegawai/manajemen-target-realisasi-skp/periode/'.$skp_target->id_periode)->with('success','Data target berhasil dihapus');
    }

}
