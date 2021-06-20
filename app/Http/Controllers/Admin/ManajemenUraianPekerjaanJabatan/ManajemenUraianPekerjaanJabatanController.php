<?php

namespace App\Http\Controllers\Admin\ManajemenUraianPekerjaanJabatan;

use App\Http\Controllers\Controller;
use App\Models\UraianPekerjaan;
use App\Models\User;
use App\Models\RefJabatan;
use App\Models\UraianPekerjaanJabatan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ManajemenUraianPekerjaanJabatanController extends Controller
{
    public function index(){
        $ref_jabatans = RefJabatan::all();
        $uraian_pekerjaans = UraianPekerjaan::all();
        
    	return view('pages.admin.manajemen_uraian_pekerjaan_jabatan.index', compact('ref_jabatans', 'uraian_pekerjaans'));
    }

    public function jabatanIndex(RefJabatan $jabatan){
        $uraian_pekerjaans = UraianPekerjaan::all();


        return view('pages.admin.manajemen_uraian_pekerjaan_jabatan.indexJabatan', compact('jabatan', 'uraian_pekerjaans'));
    }

    public function create(RefJabatan $jabatan){
    
        $uraian_pekerjaans = UraianPekerjaan::all();


        return view('pages.admin.manajemen_uraian_pekerjaan_jabatan.create', compact('uraian_pekerjaans', 'jabatan'));
    }

    public function store(Request $request, RefJabatan $jabatan){
        $data = $request->except(['_token']);
        $auth = Auth::user();
        $uraian_pekerjaan_jabatan = UraianPekerjaanJabatan::create([
            'id_jabatan' => $jabatan->id,
            'id_uraian_pekerjaan' => (int) $data['uraian_pekerjaan'],
            'is_active'	=> (int) $data['active'],
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $auth->id
        ]);

        return redirect('/admin/manajemen-uraian-pekerjaan-jabatan/'.$jabatan->id)->with('success','Data Uraian Pekerjaan Jabatan berhasil ditambahkan');
    }

    public function update(UraianPekerjaan $uraian_pekerjaan){

        return view('pages.admin.manajemen_uraian_pekerjaan.update', compact('uraian_pekerjaan'));
    }

    public function updateStore(UraianPekerjaan $uraian_pekerjaan, Request $request){
        $data = $request->except(['_token']);
        $auth = Auth::user();
        $uraian_pekerjaan->uraian = $data['uraian'];
        $uraian_pekerjaan->keterangan = $data['keterangan'];	
        $uraian_pekerjaan->poin = (float) $data['poin'];	
        $uraian_pekerjaan->is_active	= (int) $data['active'];
        $uraian_pekerjaan->satuan = $data['satuan'];	
        $uraian_pekerjaan->edited_at = Carbon::now();	
        $uraian_pekerjaan->edited_by = $auth->id;
        $uraian_pekerjaan->save();

        return redirect('/admin/manajemen-uraian-pekerjaan')->with('success','Data Uraian Pekerjaan '.$uraian_pekerjaan->uraian.' berhasil diupdate');
    }

    public function delete(UraianPekerjaanJabatan $uraian_pekerjaan_jabatan){
        $uraian_pekerjaan_jabatan->is_active = false;
        $uraian_pekerjaan_jabatan->save();
        return redirect('/admin/manajemen-uraian-pekerjaan-jabatan/'.$uraian_pekerjaan_jabatan->jabatan->id)->with('success','Data Uraian Pekerjaan Jabatan berhasil dinonaktifkan');
    }

    public function undelete(UraianPekerjaanJabatan $uraian_pekerjaan_jabatan){
        $uraian_pekerjaan_jabatan->is_active = true;
        $uraian_pekerjaan_jabatan->save();
        return redirect('/admin/manajemen-uraian-pekerjaan-jabatan/'.$uraian_pekerjaan_jabatan->jabatan->id)->with('success','Data Uraian Pekerjaan Jabatan berhasil diaktifkan');
    }
}