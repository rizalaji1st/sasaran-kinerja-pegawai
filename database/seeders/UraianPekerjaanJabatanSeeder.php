<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UraianPekerjaan;
use App\Models\UraianPekerjaanJabatan;
use App\Models\RefJabatan;
use Carbon\Carbon;


class UraianPekerjaanJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UraianPekerjaanJabatan::query()->delete();
        $user = User::where('email','admin@admin.com')->first();
        
        $uraian_pekerjaan = UraianPekerjaan::where('uraian', 'Melaksanakan Perkuliahan')->first();
        $jabatan = RefJabatan::where('nama','Dosen')->first();
        UraianPekerjaanJabatan::create([ 	
            'id_jabatan'=> $jabatan->id,	
            'id_uraian_pekerjaan' => $uraian_pekerjaan->id,	
            'is_active'	=> 1,
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id
    	]);
        
        $uraian_pekerjaan = UraianPekerjaan::where('uraian', 'Membimbing seminar mahasiswa')->first();
        $jabatan = RefJabatan::where('nama','Dosen')->first();
        UraianPekerjaanJabatan::create([ 	
            'id_jabatan'=> $jabatan->id,	
            'id_uraian_pekerjaan' => $uraian_pekerjaan->id,	
            'is_active'	=> 1,
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id
    	]);

        $uraian_pekerjaan = UraianPekerjaan::where('uraian', 'Membimbing KKN')->first();
        $jabatan = RefJabatan::where('nama','Dosen')->first();
        UraianPekerjaanJabatan::create([ 	
            'id_jabatan'=> $jabatan->id,	
            'id_uraian_pekerjaan' => $uraian_pekerjaan->id,	
            'is_active'	=> 1,
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id
    	]);

        $uraian_pekerjaan = UraianPekerjaan::where('uraian', 'Membimbing dan ikut membimbing dalam menghasilkan thesis')->first();
        $jabatan = RefJabatan::where('nama','Dosen')->first();
        UraianPekerjaanJabatan::create([ 	
            'id_jabatan'=> $jabatan->id,	
            'id_uraian_pekerjaan' => $uraian_pekerjaan->id,	
            'is_active'	=> 1,
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id
    	]);

        $uraian_pekerjaan = UraianPekerjaan::where('uraian', 'Bertugas sebagai penguji pada ujian akhir sebagai anggota')->first();
        $jabatan = RefJabatan::where('nama','Dosen')->first();
        UraianPekerjaanJabatan::create([ 	
            'id_jabatan'=> $jabatan->id,	
            'id_uraian_pekerjaan' => $uraian_pekerjaan->id,	
            'is_active'	=> 1,
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id
    	]);

        $uraian_pekerjaan = UraianPekerjaan::where('uraian', 'Membina kegiatan mahasiswa di bidang akademik dan kemahasiswaan')->first();
        $jabatan = RefJabatan::where('nama','Dosen')->first();
        UraianPekerjaanJabatan::create([ 	
            'id_jabatan'=> $jabatan->id,	
            'id_uraian_pekerjaan' => $uraian_pekerjaan->id,	
            'is_active'	=> 1,
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id
    	]);

        $uraian_pekerjaan = UraianPekerjaan::where('uraian', 'Melaksanakan datasering')->first();
        $jabatan = RefJabatan::where('nama','Dosen')->first();
        UraianPekerjaanJabatan::create([ 	
            'id_jabatan'=> $jabatan->id,	
            'id_uraian_pekerjaan' => $uraian_pekerjaan->id,	
            'is_active'	=> 1,
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id
    	]);

        $uraian_pekerjaan = UraianPekerjaan::where('uraian', 'Melaksanakan pengembangan hasil pendidikan dan penelitian yang berguna bagi masyarakat')->first();
        $jabatan = RefJabatan::where('nama','Dosen')->first();
        UraianPekerjaanJabatan::create([ 	
            'id_jabatan'=> $jabatan->id,	
            'id_uraian_pekerjaan' => $uraian_pekerjaan->id,	
            'is_active'	=> 1,
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id
    	]);

        
    }
}
