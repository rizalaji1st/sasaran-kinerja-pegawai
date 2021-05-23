<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UraianPekerjaan extends Model
{
    use HasFactory;

    protected $table = 'uraian_pekerjaan';
	protected $primaryKey = 'id';
	protected $fillable = [
		'id',
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
}
