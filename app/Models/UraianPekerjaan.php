<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\UraianPekerjaan;

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

	public function uraian_pekerjaan(){
		return $this->belongsToMany(UraianPekerjaan::class);
	}
}
