<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;
use App\Models\User;
use App\Models\RefUnit;
use App\Models\RefJabatan;
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
        
        Pegawai::query()->delete();
        
        $user = User::where('email','admin@admin.com')->first();

        $dosen = RefJabatan::where('nama','Dosen')->first();
        $prodiIf = RefUnit::where('nama','prodi Informatika')->first();

        $user1 = User::where('email','rizalaji1st@student.uns.ac.id')->first();
        Pegawai::create([
            'nama' => 'Rizal Aji Purbadinata',
            'kode_pegawai' => 'pgw_01',
            'id_unit' => $prodiIf->id,
            'alamat' => 'Boyolali',
            'id_jabatan' => $dosen->id,
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
            'id_unit' => $prodiIf->id,
            'alamat' => 'Solo',
            'id_jabatan' => $dosen->id,
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
            'id_unit' => $prodiIf->id,
            'alamat' => 'Solo',
            'id_jabatan' => $dosen->id,
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
            'id_unit' => $prodiIf->id,
            'alamat' => 'Solo',
            'id_jabatan' => $dosen->id,
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
            'id_unit' => $prodiIf->id,
            'alamat' => 'Solo',
            'id_jabatan' => $dosen->id,
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
            'id_unit' => $prodiIf->id,
            'alamat' => 'Solo',
            'id_jabatan' => $dosen->id,
            'id_user' => $user6->id,
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        $jabatanRektor = RefJabatan::where('nama','Rektor')->first();
        $rektorat = RefUnit::where('nama','rektorat')->first();
        $rektor = User::where('email','rektor@rektor.com')->first();
        Pegawai::create([
            'nama' => 'Pak jamal',
            'kode_pegawai' => 'rkt_01',
            'id_unit' => $rektorat->id,
            'alamat' => 'Solo',
            'id_jabatan' => $jabatanRektor->id,
            'id_user' => $rektor->id,
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        $jabatanTU = RefJabatan::where('nama','Pegawai TU')->first();
        $UPTBahasa = RefUnit::where('nama','UPT Bahasa')->first();
        $pegawaiTU = User::where('email','tuuptbahasa@gmail.com')->first();
        Pegawai::create([
            'nama' => 'Pak TU',
            'kode_pegawai' => 'tu_01',
            'id_unit' => $UPTBahasa->id,
            'alamat' => 'Solo',
            'id_jabatan' => $jabatanTU->id,
            'id_user' => $pegawaiTU->id,
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        $jabatanNOC = RefJabatan::where('nama','Staff NOC')->first();
        $UPTPuskom = RefUnit::where('nama','UPT Puskom')->first();
        $staffNOC = User::where('email','staffnocpuskom@gmail.com')->first();
        Pegawai::create([
            'nama' => 'Pak NOC',
            'kode_pegawai' => 'noc_01',
            'id_unit' => $UPTPuskom->id,
            'alamat' => 'Solo',
            'id_jabatan' => $jabatanNOC->id,
            'id_user' => $staffNOC->id,
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        $jabatanDev = RefJabatan::where('nama','Staff IT Developer')->first();
        $UPTPuskom = RefUnit::where('nama','UPT Puskom')->first();
        $staffDev = User::where('email','staffdevpuskom@gmail.com')->first();
        Pegawai::create([
            'nama' => 'Pak Dev',
            'kode_pegawai' => 'dev_01',
            'id_unit' => $UPTPuskom->id,
            'alamat' => 'Solo',
            'id_jabatan' => $jabatanDev->id,
            'id_user' => $staffDev->id,
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);
    }
}
