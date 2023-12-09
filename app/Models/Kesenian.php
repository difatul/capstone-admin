<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesenian extends Model
{
    use HasFactory;
    protected $table = "kesenian";
    protected $fillable = [
        'idkesenian',
        'nama',
        'alamat',
        'catatan',
        'notelp',
        'harga',
        'email',
    ];

    // public $incrementing = false;
    // public $timestamps = true;
}
