<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UraianPekerjaan;
use App\Models\UraianPekerjaanJabatan;
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
        
        $uraian_pekerjaan = UraianPekerjaan::where('uraian','Melaksanakan Perkuliahan')->first();
        $jabatan = RefJabatan::where('nama','Dosen')->first();
        UraianPekerjaanJabatan::create([ 	
            'id_jabatan'=> $uraian_pekerjaan->id,	
            'id_uraian_pekerjaan' => $jabatan->id,	
            'is_active'	=> 1,
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id
    	]);


        
    }
}
