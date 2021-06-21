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

    public function pegawai(){
        return $this->hasOne(Pegawai::class, 'id', 'id_pegawai');
    }

    public function uraian_pekerjaan_jabatan(){
        return $this->hasOne(UraianPekerjaanJabatan::class, 'id', 'id_uraian_pekerjaan_jabatan');
    }
    
}
