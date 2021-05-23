<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('role_user')->delete();
        User::query()->delete();
    
        $adminRole = Role::where('nama','admin')->first();
        $pegawaiRole = Role::where('nama','pegawai')->first();

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123')
        ]);

        $pegawai = User::create([
            'name' => 'pegawai',
            'email' => 'pegawai@pegawai.com',
            'password' => Hash::make('pegawai123')
        ]);

        $user1 = User::create([
            'name' => 'Rizal Aji Purbadinata',
            'email' => 'rizalaji1st@student.uns.ac.id',
            'password' => Hash::make('rizal123')
        ]);

        $user2 = User::create([
            'name' => 'Vigo Agmel Sadewa',
            'email' => 'vigosss12@student.uns.ac.id',
            'password' => Hash::make('vigo123')
        ]);

        $user3 = User::create([
            'name' => 'Rio Johanes',
            'email' => 'riojohanes@student.uns.ac.id',
            'password' => Hash::make('rio123')
        ]);

        $user4 = User::create([
            'name' => 'Wahyu Misbah Assudur',
            'email' => 'barisanjancukers76@student.uns.ac.id',
            'password' => Hash::make('misbah123')
        ]);

        $user5 = User::create([
            'name' => 'Silvya Amalia',
            'email' => 'silvyaamalia@student.uns.ac.id',
            'password' => Hash::make('silvya123')
        ]);

        $user6 = User::create([
            'name' => 'Tema Mumtaza',
            'email' => 'temamumtaza@student.uns.ac.id',
            'password' => Hash::make('tema123')
        ]);

        $admin->roles()->attach($adminRole);
        $pegawai->roles()->attach($pegawaiRole);
        $user1->roles()->attach($pegawaiRole);
        $user2->roles()->attach($pegawaiRole);
        $user3->roles()->attach($pegawaiRole);
        $user4->roles()->attach($pegawaiRole);
        $user5->roles()->attach($pegawaiRole);
        $user6->roles()->attach($pegawaiRole);
    }
}
