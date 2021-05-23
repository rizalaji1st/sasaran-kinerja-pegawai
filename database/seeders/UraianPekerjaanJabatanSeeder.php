<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UraianPekerjaan;
use Faker\Factory as Faker;

class UraianPekerjaanJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $users = User::all()->pluck('id')->toArray();
        $idJabatan = DB::table('ref_jabatan')->pluck('id')->toArray();
        $idUraianPekerjaan = DB::table('uraian_pekerjaan')->pluck('id')->toArray();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('uraian_pekerjaan_jabatan')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach (range(1,20) as $index) {
    	    // insert data ke table uraian_pekerjaan menggunakan Faker
    		DB::table('uraian_pekerjaan_jabatan')->insert([ 	
                'id_jabatan' => $faker->randomElement($idJabatan),
                'id_uraian_pekerjaan' => $faker->randomElement($idUraianPekerjaan),
                'inserted_at' => $faker->dateTime(),
                'inserted_by' => $faker->randomElement($users),
                'edited_at' => $faker->dateTime(),
                'edited_by' => $faker->randomElement($users),
                'is_active' => $faker->boolean
    		]);
        }
    }
}
