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
        'tanggal_awal',
        'tanggal_akhir',
        'inserted_by',
        'edited_by'
	];    

    protected $dates = [
        'inserted_at',
        'edited_at'
    ];

    public function skp_target(){

        return $this->hasOne(SkpTarget::class, 'id', 'id_skp_target');

    }
}
