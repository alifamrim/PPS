<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelMahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nrp',
        'email',
        'judul',
        'pembimbing1',
        'pembimbing2',
        'penguji1',
        'penguji2',
        'ruangan',
        'tanggal',
        'waktu',
        'feedback',
        'nilai',
        'status'
    ];
}
