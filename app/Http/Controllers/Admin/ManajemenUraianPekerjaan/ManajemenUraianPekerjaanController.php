<?php

namespace App\Http\Controllers\Admin\ManajemenUraianPekerjaan;

use App\Http\Controllers\Controller;
use App\Models\UraianPekerjaan;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ManajemenUraianPekerjaanController extends Controller
{
    public function index(){
        $uraian_pekerjaans = UraianPekerjaan::all();
        
        return view('pages.admin.manajemen_uraian_pekerjaan.index', compact('uraian_pekerjaans'));
    }

    public function create(){
        
        return view('pages.admin.manajemen_uraian_pekerjaan.create');
    }

    public function store(Request $request, User $user){
        $data = $request->except(['_token']);
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

    public function delete(UraianPekerjaan $uraian_pekerjaan){
        $uraian_pekerjaan->delete();

        return redirect('/admin/manajemen-uraian-pekerjaan')->with('success','Data Uraian Pekerjaan berhasil dihapus');
    }
}