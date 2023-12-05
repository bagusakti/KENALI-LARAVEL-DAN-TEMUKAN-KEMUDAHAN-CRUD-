<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel extends Model
{
    use HasFactory;

    protected $table = 'tabel';

    protected $fillable = [
        'nama',
        'kelas',
        'aksi',
    ];
}
