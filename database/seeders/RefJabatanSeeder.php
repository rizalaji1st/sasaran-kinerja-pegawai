<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefUnit;
use Carbon\Carbon;
use App\Models\User;

class RefJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RefJabatan::query()->delete();

        $user = User::where('email','admin@admin.com') -> first();

        RefJabatan::create([
            'nama' => 'Rektor',
            'keterangan' => 'jabatan pimpinan utama dari lembaga pendidikan formal',
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        RefJabatan::create([
            'nama' => 'Dekan',
            'keterangan' => 'jabatan pimpinan utama dari lembaga pendidikan formal',
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        RefJabatan::create([
            'nama' => 'Dosen',
            'keterangan' => 'jabatan pimpinan utama dari lembaga pendidikan formal',
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        RefJabatan::create([
            'nama' => 'Pegawai TU',
            'keterangan' => 'jabatan pimpinan utama dari lembaga pendidikan formal',
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        RefJabatan::create([
            'nama' => 'Staff NOC',
            'keterangan' => 'jabatan pimpinan utama dari lembaga pendidikan formal',
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);

        RefJabatan::create([
            'nama' => 'Staff IT Developer',
            'keterangan' => 'jabatan pimpinan utama dari lembaga pendidikan formal',
            'is_active' => 1,
            'inserted_at' => Carbon::now(),
            'inserted_by' => $user->id,
            'edited_at' => Carbon::now(),
            'edited_by' => $user->id
        ]);
    }
}
