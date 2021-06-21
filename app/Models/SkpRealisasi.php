<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkpRealisasi extends Model
{
    use HasFactory;

    protected $table = 'skp_realisasi';
	protected $primaryKey = 'id';
	protected $fillable = [
		'id_skp_target',
		'lokasi',
		'jml_realisasi',
		'keterangan',
        'path_bukti',
        'inserted_by',
        'edited_by'
	];    

    protected $dates = [
        'inserted_at',
        'edited_at'
    ];
}
