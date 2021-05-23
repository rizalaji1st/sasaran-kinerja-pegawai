<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Pegawai::truncate();
        
        $user = User::where('email','admin@admin.com')->first();

        DB::table('ref_unit')->insert([
            'id' => 1,
            'nama' => 'rektorat',
            'level' => 1,
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $user1 = User::where('email','rizalaji1st@student.uns.ac.id')->first();
        Pegawai::create([
            'nama' => 'Rizal Aji Purbadinata',
            'kode_pegawai' => 'pgw_01',
            'id_unit' => 1,
            'alamat' => 'Boyolali',
            'id_jabatan' => 1,
            'id_user' => $user1->id,
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        $user2 = User::where('email','vigosss12@student.uns.ac.id')->first();
        Pegawai::create([
            'nama' => 'Vigo Agmel Sadewa',
            'kode_pegawai' => 'pgw_02',
            'id_unit' => 1,
            'alamat' => 'Solo',
            'id_jabatan' => 1,
            'id_user' => $user2->id,
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        $user3 = User::where('email','riojohanes@student.uns.ac.id')->first();
        Pegawai::create([
            'nama' => 'Rio Johanes',
            'kode_pegawai' => 'pgw_03',
            'id_unit' => 1,
            'alamat' => 'Solo',
            'id_jabatan' => 1,
            'id_user' => $user3->id,
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        $user4 = User::where('email','barisanjancukers76@student.uns.ac.id')->first();
        Pegawai::create([
            'nama' => 'Wahyu Misbah Assudur',
            'kode_pegawai' => 'pgw_04',
            'id_unit' => 1,
            'alamat' => 'Solo',
            'id_jabatan' => 1,
            'id_user' => $user4->id,
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        $user5 = User::where('email','silvyaamalia@student.uns.ac.id')->first();
        Pegawai::create([
            'nama' => 'Silvya Amalia',
            'kode_pegawai' => 'pgw_05',
            'id_unit' => 1,
            'alamat' => 'Solo',
            'id_jabatan' => 1,
            'id_user' => $user5->id,
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        $user6 = User::where('email','temamumtaza@student.uns.ac.id')->first();
        Pegawai::create([
            'nama' => 'Tema Mumtaza',
            'kode_pegawai' => 'pgw_06',
            'id_unit' => 1,
            'alamat' => 'Solo',
            'id_jabatan' => 1,
            'id_user' => $user6->id,
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);
    }
}
