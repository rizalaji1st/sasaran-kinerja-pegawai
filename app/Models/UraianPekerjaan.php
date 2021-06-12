<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\UraianPekerjaan;
use App\Models\RefJabatan;

class UraianPekerjaan extends Model
{
    use HasFactory;

    protected $table = 'uraian_pekerjaan';
	protected $primaryKey = 'id';
	protected $fillable = [
		'uraian',
		'keterangan',
		'poin',
		'is_active',
		'satuan',
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

    public function ref_jabatan(){
		return $this->belongsToMany(RefJabatan::class);
	}
    
}
