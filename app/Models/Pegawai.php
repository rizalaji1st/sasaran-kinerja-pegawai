<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
	protected $primaryKey = 'id';
	protected $fillable = [
		'nama',
		'kode_pegawai',
		'id_unit',
		'alamat',
		'id_jabatan',
		'id_user',
		'is_active',
        'inserted_by',
        'edited_by'
	];    

    protected $dates = [
        'inserted_at',
        'edited_at'
    ];
}
