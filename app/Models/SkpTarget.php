<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkpTarget extends Model
{
    use HasFactory;

    protected $table = 'skp_target';
	protected $primaryKey = 'id';
	protected $fillable = [
		'id_pegawai',
		'id_uraian_pekerjaan_jabatan',
		'jml_target',
		'id_periode',
        'inserted_by',
        'edited_by'
	];    

    protected $dates = [
        'inserted_at',
        'edited_at'
    ];
}
