<?php

namespace App\Http\Controllers\Admin\ManajemenRefUnit;

use App\Http\Controllers\Controller;
use App\Models\RefUnit;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class ManajemenRefUnitController extends Controller
{
    public function index(){
        $ref_units = RefUnit::all();

        return view('pages.admin.manajemen_ref_unit.index', compact('ref_units'));

    }

    public function create(){
        $ref_units = RefUnit::all();

        return view('pages.admin.manajemen_ref_unit.create', compact('ref_units'));
        
    }

    public function store(Request $request){
        $data = $request->except(['_token']);
        $auth = Auth::user();
        $unit = RefUnit::find((int) $data ['unit']);
        $ref_unit = RefUnit::create([
            'nama' => $data['nama'],
            'id_unit_parent' => $unit ? $unit->id : NULL,	
            'is_active'	=> (int) $data['active'],
            'level' => $unit ? $unit->level + 1 : NULL,	
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $auth->id
        ]);

        return redirect('/admin/manajemen-ref-unit')->with('success','Data Ref Unit '.$ref_unit->name.' berhasil ditambahkan');
    }

    public function update(RefUnit $ref_unit){
        $ref_units = RefUnit::all();

        return view('pages.admin.manajemen_ref_unit.update', compact('ref_units', 'ref_unit'));
    }

    public function updateStore(RefUnit $ref_unit, Request $request){
        $data = $request->except(['_token']);
        $auth = Auth::user();
        $unit = RefUnit::find((int) $data ['unit']);
        
        $ref_unit->nama = $data['nama'];
        $ref_unit->id_unit_parent = $unit ? $unit->id : NULL;	
        $ref_unit->is_active = (int) $data['active'];
        $ref_unit->level = $unit ? $unit->level + 1 : NULL;	
        $ref_unit->edited_at = Carbon::now();	
        $ref_unit->edited_by = $auth->id;
        $ref_unit->save();

        return redirect('/admin/manajemen-ref-unit')->with('success','Data Ref Unit '.$ref_unit->nama.' berhasil diupdate');
    }

    public function delete(RefUnit $ref_unit){
        try{
            $ref_unit->delete();
            
        }
        catch(Throwable $e){
            return  redirect('/admin/manajemen-ref-unit')->with('warning','Data Ref Unit '.$ref_unit->nama.' gagal dihapus, pastikan unit ini tidak memiliki lembaga bawahan');
        }
        
        return  redirect('/admin/manajemen-ref-unit')->with('success','Data Ref Unit '.$ref_unit->nama.' berhasil dihapus');
    }
}
