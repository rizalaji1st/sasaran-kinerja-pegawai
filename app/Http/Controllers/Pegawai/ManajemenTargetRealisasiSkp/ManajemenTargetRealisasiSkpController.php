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
        $skp_targets = SkpTarget::where([['id_pegawai', $user->pegawai->id],['id_periode', $periode->id]])->get();

        return view('pages.pegawai.manajemen_target_realisasi_skp.periode', compact('skp_targets','user', 'periode','pegawais','refJabatan'));
    }

    public function store(Request $request){
        $data = $request->except(['_token']);
        dd($data);
        $auth = Auth::user();
        $uraian_pekerjaan = UraianPekerjaan::create([
            'uraian' => $data['uraian'],
            'keterangan' => $data['keterangan'],	
            'poin' => (float) $data['poin'],	
            'is_active'	=> (int) $data['active'],
            'satuan' => $data['satuan'],	
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $auth->id
        ]);

        return redirect('/admin/manajemen-uraian-pekerjaan')->with('success','Data Uraian Pekerjaan '.$user->name.' berhasil ditambahkan');
    }

}
