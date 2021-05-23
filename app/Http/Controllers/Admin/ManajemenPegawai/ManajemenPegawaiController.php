<?php

namespace App\Http\Controllers\Admin\ManajemenPegawai;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\RefUnit;
use App\Models\RefJabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ManajemenPegawaiController extends Controller
{
    public function index(){
        $users = User::all();
        
        return view('pages.admin.manajemen_pegawai.index', compact('users'));
    }

    public function create(User $user){
        $refJabatan = RefJabatan::all();
        $refUnit = RefUnit::all();
        return view('pages.admin.manajemen_pegawai.create', compact('refUnit', 'user', 'refJabatan'));
    }

    public function store(Request $request, User $user){
        $data = $request->except(['_token']);
        $auth = Auth::user();
        $pegawai = Pegawai::create([
            'nama' => $user->name,
            'kode_pegawai' => $data['kode-pegawai'],
            'id_unit' => (int) $data['unit'],
            'alamat' => $data['alamat'],
            'id_jabatan' => (int) $data['jabatan'],
            'is_active' => (int) $data['active'],
            'id_user' => $user->id,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $auth->id,
        ]);

        return redirect('/admin/manajemen-pegawai')->with('success','Data Pegawai '.$user->name.' berhasil ditambahkan');
    }

    public function update(Pegawai $pegawai){
        $refJabatan = RefJabatan::all();
        $refUnit = RefUnit::all();
        return view('pages.admin.manajemen_pegawai.update', compact('refUnit', 'pegawai', 'refJabatan'));
    }

    public function updateStore(Pegawai $pegawai, Request $request){
        $data = $request->except(['_token']);
        $auth = Auth::user();
        $pegawai->nama = $data['nama'];
        $pegawai->kode_pegawai = $data['kode_pegawai'];
        $pegawai->id_unit = (int) $data['unit'];
        $pegawai->alamat = $data['alamat'];
        $pegawai->id_jabatan = (int) $data['jabatan'];
        $pegawai->is_active = (int) $data['active'];
        $pegawai->id_user = (int )$data['id_user'];
        $pegawai->edited_at = Carbon::now();
        $pegawai->edited_by = $auth->id;
        $pegawai->save();

        return redirect('/admin/manajemen-pegawai')->with('success','Data Pegawai '.$pegawai->nama.' berhasil diupdate');
    }
}
