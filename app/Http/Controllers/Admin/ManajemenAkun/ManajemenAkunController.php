<?php

namespace App\Http\Controllers\Admin\ManajemenAkun;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class ManajemenAkunController extends Controller
{
    public function index(){
        $users = User::all();
        
        return view('pages.admin.manajemen_akun.index', compact('users'));
    }

    public function create(){
        $roles = Role::all();

        return view('pages.admin.manajemen_akun.create', compact('roles'));
    }

    public function store(Request $request){
        $data = $request->except(['_token']);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if(isset($data['roles']))
        $user->roles()->sync($data['roles']);

        return redirect('/admin/manajemen-akun')->with('success','Akun berhasil ditambahkan');
    }

    public function update(User $user){
        $roles = Role::all();

        return view('pages.admin.manajemen_akun.update', compact('roles','user'));
    }

    public function updateStore(Request $request, User $user){
        $data = $request->except(['_token']);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();

        if(isset($data['roles']))
            $user->roles()->sync($data['roles']);

        return redirect('/admin/manajemen-akun')->with('success','Akun berhasil diupdate');
    }

    public function delete(User $user){
        $user->delete();

        return redirect('/admin/manajemen-akun')->with('success','Akun berhasil dihapus');
    }
}
