<?php

namespace App\Http\Controllers\Admin\ManajemenRefJabatan;

use App\Http\Controllers\Controller;
use App\Models\RefJabatan;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class ManajemenRefJabatanController extends Controller
{
    public function index(){
        $ref_jabatans = RefJabatan::all();

        return view('pages.admin.manajemen_ref_jabatan.index', compact('ref_jabatans'));

    }

    public function create(){
        $ref_jabatans = RefJabatan::all();

        return view('pages.admin.manajemen_ref_jabatan.create', compact('ref_jabatans'));
        
    }

    public function store(Request $request){
        $data = $request->except(['_token']);
        $auth = Auth::user();
        $ref_jabatan = RefJabatan::create([
            'nama' => $data['nama'],
            'keterangan' => $data['keterangan'],	
            'is_active'	=> (int) $data['active'],
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $auth->id
        ]);

        return redirect('/admin/manajemen-ref-jabatan')->with('success','Data Ref Jabatan '.$ref_jabatan->name.' berhasil ditambahkan');
    }

    public function update(RefJabatan $ref_jabatan){

        return view('pages.admin.manajemen_ref_jabatan.update', compact('ref_jabatan'));
    }

    public function updateStore(RefJabatan $ref_jabatan, Request $request){
        $data = $request->except(['_token']);
        $auth = Auth::user();
        
        $ref_jabatan->nama = $data['nama'];
        $ref_jabatan->keterangan = $data['keterangan'];
        $ref_jabatan->is_active = (int) $data['active'];	
        $ref_jabatan->edited_at = Carbon::now();	
        $ref_jabatan->edited_by = $auth->id;
        $ref_jabatan->save();

        return redirect('/admin/manajemen-ref-jabatan')->with('success','Data Ref jabatan '.$ref_jabatan->nama.' berhasil diupdate');
    }

    public function delete(RefJabatan $ref_jabatan){
        try{
            $ref_jabatan->delete();
            
        }
        catch(Throwable $e){
            return  redirect('/admin/manajemen-ref-jabatan')->with('warning','Data Ref Jabatan '.$ref_jabatan->nama.' gagal dihapus, pastikan tidak ada yang memiliki jabatan ini');
        }
        
        return  redirect('/admin/manajemen-ref-jabatan')->with('success','Data Ref Jabatan '.$ref_jabatan->nama.' berhasil dihapus');
    }
}
