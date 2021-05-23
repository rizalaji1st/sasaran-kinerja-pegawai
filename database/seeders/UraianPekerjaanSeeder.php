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
       
        UraianPekerjaan::query()->delete();
        $user = User::where('email','admin@admin.com')->first();

    	UraianPekerjaan::create([ 	
            'uraian' => 'Melaksanakan Perkuliahan',	
            'keterangan' => 'Tiap 10 sks pertama 1 poin ',	
            'poin' => 1,	
            'is_active'	=> 1,
            'satuan' => 'SKS',	
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);

       UraianPekerjaan::create([ 	
            'uraian' => 'Membimbing seminar mahasiswa',	
            'keterangan' => 'Tiap semester 1 poin',	
            'poin' => 1,	
            'is_active'	 => 1,
            'satuan' => 'Semester',	
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);

       UraianPekerjaan::create([ 	
            'uraian' => 'Membimbing KKN.',	
            'keterangan' => 'Tiap semester poin 1',	
            'poin' => 1,	
            'is_active'	 => 1,
            'satuan' => 'Semester',	
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);

       UraianPekerjaan::create([ 	
            'uraian' => 'Membimbing dan ikut membimbing dalam menghasilkan thesis.',	
            'keterangan' => 'Tiap bimbingan poin 3',	
            'poin' => 3,	
            'is_active'	 => 1,
            'satuan' => 'Bimbingan',	
            'inserted_at' => Carbon::now(),	
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);

       UraianPekerjaan::create([ 	
            'uraian' => 'Bertugas sebagai penguji pada ujian akhir sebagai anggota.',	
            'keterangan' => 'Tiap kegiatan poin 0.5',	
            'poin' => 0.5,	
            'is_active'	 => 1,
            'satuan' => 'Kegiatan',	
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);

       UraianPekerjaan::create([ 	
            'uraian' => 'Membina kegiatan mahasiswa di bidang akademik dan kemahasiswaan.',	
            'keterangan' => 'Tiap semester poin 2',	
            'poin' => 2,	
            'is_active'	 => 1,
            'satuan' => 'Semester',	
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);

        UraianPekerjaan::create([ 	
            'uraian' => 'Melaksanakan datasering.',	
            'keterangan' => 'Tiap semester poin 5',	
            'poin' => 5,	
            'is_active'	 => 1,
            'satuan' => 'Semester',	
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);

        UraianPekerjaan::create([ 	
            'uraian' => 'Melaksanakan pengembangan hasil pendidikan dan penelitian yang berguna bagi masyarakat.',	
            'keterangan' => 'Tiap semester poin 3',	
            'poin' => 3,	
            'is_active'	 => 1,
            'satuan' => 'Semester',	
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),	
            'edited_by' => $user->id,
    	]);

    }
}