<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UraianPekerjaanJabatan extends Model
{
    use HasFactory;

    protected $table = 'uraian_pekerjaan_jabatan';
	protected $primaryKey = 'id';
	protected $fillable = [
		'id_jabatan',
		'id_uraian_pekerjaan',
		'is_active',
        'inserted_by',
        'edited_by'
	];    

    protected $dates = [
        'inserted_at',
        'edited_at'
    ];

    public function uraian_pekerjaan(){
        return $this->hasOne(UraianPekerjaan::class, 'uraian_pekerjaan_jabatan');
    }
    
}
