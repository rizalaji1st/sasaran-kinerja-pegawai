<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;

    protected $table = 'periode';
	protected $primaryKey = 'id';
	protected $fillable = [
		'nama',
        'inserted_by',
        'edited_by'
	];    

    protected $dates = [
        'tanggal_awal',
        'tanggal_akhir',
        'inserted_at',
        'edited_at'
    ];
}
