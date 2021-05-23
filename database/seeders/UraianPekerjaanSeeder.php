<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UraianPekerjaan;
use Carbon\Carbon;


class UraianPekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('uraian_pekerjaan')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $user = User::where('email','admin@admin.com')->first();

    	DB::table('uraian_pekerjaan')->insert([ 	
            'uraian' => 'Menetapkan kegiatan Sosialisasi UU Aparatur Sipil Negara.',	
            'keterangan' => 'Eselon I',	
            'poin' => '10.50',	
            'is_active'	=> 1,
            'satuan' => 'Kelurahan',	
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);

        DB::table('uraian_pekerjaan')->insert([ 	
            'uraian' => 'Menetapkan Perjanjian Kinerja Deputi Akuntabilitas Kinerja.',	
            'keterangan' => 'Eselon I',	
            'poin' => '4.0',	
            'is_active'	 => 1,
            'satuan' => 'Desa',	
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);

        DB::table('uraian_pekerjaan')->insert([ 	
            'uraian' => 'Menetapkan rumusan peraturan perundang-undangan di bidang Kepegawaian.',	
            'keterangan' => 'Eselon I',	
            'poin' => '2.5',	
            'is_active'	 => 1,
            'satuan' => 'Kecamatan',	
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);

        DB::table('uraian_pekerjaan')->insert([ 	
            'uraian' => 'Menyelenggarakan sosialisasi UU Aparatur Sipil Negara.',	
            'keterangan' => 'Eselon II',	
            'poin' => '9.25',	
            'is_active'	 => 1,
            'satuan' => 'Kecamatan',	
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);

        DB::table('uraian_pekerjaan')->insert([ 	
            'uraian' => 'Melaksanakan Rapat koordinasi dengan unit kerja lain dalam rangka penyusunan Perjanjian Kinerja SKPD.',	
            'keterangan' => 'Eselon III',	
            'poin' => '12.30',	
            'is_active'	 => 1,
            'satuan' => 'Kecamatan',	
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);

        DB::table('uraian_pekerjaan')->insert([ 	
            'uraian' => 'Menyiapkan bahan penyusunan Perjanjian Kinerja.',	
            'keterangan' => 'Eselon III',	
            'poin' => '7.40',	
            'is_active'	 => 1,
            'satuan' => 'Kecamatan',	
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);
    }
}