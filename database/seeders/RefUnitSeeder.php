<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefUnit;
use Carbon\Carbon;
use App\Models\User;

class RefUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RefUnit::query()->delete();

        $user = User::where('email','admin@admin.com') -> first();


        RefUnit::create([
            'nama' => 'rektorat',
            'level' => 1,
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]); 

        $refUnit = RefUnit::where('nama','rektorat') -> first();
        RefUnit::create([
            'nama' => 'fakultas MIPA',
            'level' => 2,
            'is_active' => 1,
            'id_unit_parent' => $refUnit->id,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]); 
        
        $refUnit = RefUnit::where('nama','rektorat') -> first();
        RefUnit::create([
            'nama' => 'fakultas FKIP',
            'level' => 2,
            'is_active' => 1,
            'id_unit_parent' => $refUnit->id,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]); 

        $refUnit = RefUnit::where('nama','rektorat') -> first();
        RefUnit::create([
            'nama' => 'UPT Bahasa',
            'level' => 2,
            'is_active' => 1,
            'id_unit_parent' => $refUnit->id,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        $refUnit = RefUnit::where('nama','rektorat') -> first();
        RefUnit::create([
            'nama' => 'UPT Perpustakaan',
            'level' => 2,
            'is_active' => 1,
            'id_unit_parent' => $refUnit->id,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        $refUnit = RefUnit::where('nama','rektorat') -> first();
        RefUnit::create([
            'nama' => 'UPT Puskom',
            'level' => 2,
            'is_active' => 1,
            'id_unit_parent' => $refUnit->id,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        $refUnit = RefUnit::where('nama','fakultas MIPA') -> first();
        RefUnit::create([
            'nama' => 'prodi Informatika',
            'level' => 3,
            'is_active' => 1,
            'id_unit_parent' => $refUnit->id,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]); 

        $refUnit = RefUnit::where('nama','fakultas MIPA') -> first();
        RefUnit::create([
            'nama' => 'prodi Matematika',
            'level' => 3,
            'is_active' => 1,
            'id_unit_parent' => $refUnit->id,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]); 
        
        $refUnit = RefUnit::where('nama','fakultas MIPA') -> first();
        RefUnit::create([
            'nama' => 'prodi Statistika',
            'level' => 3,
            'is_active' => 1,
            'id_unit_parent' => $refUnit->id,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]); 

        $refUnit = RefUnit::where('nama','fakultas FKIP') -> first();
        RefUnit::create([
            'nama' => 'prodi Pendidikan Matematika',
            'level' => 3,
            'is_active' => 1,
            'id_unit_parent' => $refUnit->id,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]); 

        $refUnit = RefUnit::where('nama','fakultas FKIP') -> first();
        RefUnit::create([
            'nama' => 'prodi Pendidikan Fisika',
            'level' => 3,
            'is_active' => 1,
            'id_unit_parent' => $refUnit->id,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]); 

        $refUnit = RefUnit::where('nama','fakultas FKIP') -> first();
        RefUnit::create([
            'nama' => 'prodi Pendidikan Statistika',
            'level' => 3,
            'is_active' => 1,
            'id_unit_parent' => $refUnit->id,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]); 

        
    }
}
