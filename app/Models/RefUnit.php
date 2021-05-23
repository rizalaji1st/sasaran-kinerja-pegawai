<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefUnit extends Model
{
    use HasFactory;

    protected $table = 'ref_unit';
	protected $primaryKey = 'id';
	protected $fillable = [
		'nama',
		'id_unit_parent',
		'level',
        'is_active',
        'inserted_by',
        'edited_by'
	];    

    protected $dates = [
        'inserted_at',
        'edited_at'
    ];
}
