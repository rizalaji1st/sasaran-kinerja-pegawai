<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Faker\Factory as Faker;


class UraianPekerjaanSeeder extends Seeder
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('uraian_pekerjaan')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
 
    	foreach (range(1,20) as $index) {
    	    // insert data ke table uraian_pekerjaan menggunakan Faker
    		DB::table('uraian_pekerjaan')->insert([ 	
                'uraian' => $faker->jobTitle,	
                'keterangan' => $faker->text,	
                'poin' => $faker->randomDigitNotNull,	
                'is_active'	 => $faker->boolean,
                'satuan' => $faker->company,	
                'inserted_at' => $faker->dateTime(),	
                'inserted_by' => $faker->randomElement($users),	//reference foreign key dari tabel user
                'edited_at' => $faker->dateTime(),	
                'edited_by' => $faker->randomElement($users)	
    		]);
        }
    }
}