<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Eloquent;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        //disable foreign key check for this connection before running seeders
       
        // \App\Models\User::factory(10)->create();
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RefUnitSeeder::class);
        $this->call(UraianPekerjaanSeeder::class);
        $this->call(UraianPekerjaanJabatanSeeder::class);
        
    
    }
}
