<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Pegawai;

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

	public function user(){
        return $this->belongsTo(User::class);
    }

	public function pegawai(){
		return $this->belongsToMany(Pegawai::class);
	}
}
