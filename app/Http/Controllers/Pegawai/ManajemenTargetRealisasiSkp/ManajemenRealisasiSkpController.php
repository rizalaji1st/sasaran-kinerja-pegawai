<?php

namespace App\Http\Controllers\Pegawai\ManajemenTargetRealisasiSkp;

use App\Http\Controllers\Controller;
use App\Models\SkpRealisasi;
use App\Models\SkpTarget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ManajemenRealisasiSkpController extends Controller
{
    public function index(SkpTarget $skp_target){
        $skp_realisasis = SkpRealisasi::where('id_skp_target', $skp_target->id)->get();
        return view('pages.pegawai.manajemen_target_realisasi_skp.manajemen_realisasi.index', compact('skp_target','skp_realisasis'));
    }

    public function create(SkpTarget $skp_target){
        return view('pages.pegawai.manajemen_target_realisasi_skp.manajemen_realisasi.create', compact('skp_target'));
    }

    public function store(Request $request, SkpTarget $skp_target){
        $data = $request->except(['_token']);
        $auth = Auth::user();
        $extension = $request->file('bukti')->extension();
        $filenameWithExt = $request->file('bukti')->getClientOriginalName();
        $filename =  pathinfo($filenameWithExt, PATHINFO_FILENAME) . '_' . date('dmyHis') . '_' . Str::random(4) . '.' . $extension;
        $path = Storage::putFileAs('/data_file/path_bukti', $request->file('bukti'), $filename);
        $skp_realisasi = SkpRealisasi::create([
            'id_skp_target' => $skp_target->id,
            'tanggal_awal' => $data['tanggal_awal'],	
            'tanggal_akhir'	=> $data['tanggal_akhir'],
            'lokasi'	=>  $data['lokasi'],
            'jml_realisasi'	=>$data['jml_realisasi'],
            'keterangan'	=> $data['keterangan'],
            'path_bukti' => $path,
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $auth->id
        ]);

        return redirect('/pegawai/manajemen-realisasi-skp/'.$skp_target->id)->with('success','Data realisasi berhasil ditambahkan');
    }

    public function update(SkpRealisasi $skp_realisasi){
        return view('pages.pegawai.manajemen_target_realisasi_skp.manajemen_realisasi.update', compact('skp_realisasi'));
    }

    public function updateStore(Request $request, SkpRealisasi $skp_realisasi){
        $data = $request->except(['_token']);
        $auth = Auth::user();
        $path = $skp_realisasi->path_bukti;
        if ($request->file('bukti')) {
            Storage::delete($skp_realisasi->path_bukti);
            $extension = $request->file('bukti')->extension();
            $filenameWithExt = $request->file('bukti')->getClientOriginalName();
            $filename =  pathinfo($filenameWithExt, PATHINFO_FILENAME) . '_' . date('dmyHis') . '_' . Str::random(4) . '.' . $extension;
            $path = Storage::putFileAs('/data_file/path_bukti', $request->file('bukti'), $filename);
        }
        $skp_realisasi->tanggal_awal = $data['tanggal_awal'];
        $skp_realisasi->tanggal_akhir = $data['tanggal_akhir'];
        $skp_realisasi->lokasi = $data['lokasi'];
        $skp_realisasi->jml_realisasi = $data['jml_realisasi'];
        $skp_realisasi->keterangan = $data['keterangan'];
        $skp_realisasi->path_bukti = $path;
        $skp_realisasi->edited_at = Carbon::now();
        $skp_realisasi->edited_by = $auth->id;
        $skp_realisasi->save();

        return redirect('/pegawai/manajemen-realisasi-skp/'.$skp_realisasi->skp_target->id)->with('success','Data realisasi berhasil diupdate');
    }

    public function bukti(SkpRealisasi $skp_realisasi){
        return Storage::download($skp_realisasi->path_bukti);
    }

    public function delete(SkpRealisasi $skp_realisasi){
        Storage::delete($skp_realisasi->path_bukti);
        $skp_realisasi->delete();
        return redirect('/pegawai/manajemen-realisasi-skp/'.$skp_realisasi->skp_target->id)->with('success','Data realisasi berhasil dihapus');
    }
}
