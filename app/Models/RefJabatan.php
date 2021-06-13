<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefJabatan extends Model
{
    use HasFactory;

    protected $table = 'ref_jabatan';
	protected $primaryKey = 'id';
	protected $fillable = [
		'nama',
		'keterangan',
        'is_active',
        'inserted_by',
        'edited_by'
	];    

    protected $dates = [
        'inserted_at',
        'edited_at'
    ];

    public function uraian_pekerjaan_jabatan(){
		return $this->hasMany(UraianPekerjaanJabatan::class, 'uraian_pekerjaan_jabatan');
	}
}
