<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psikolog extends Model
{
    use HasFactory;
    protected $primaryKey = 'idPsikolog';
    protected $fillable = [
        'namaPenyelenggara',
        'namaPsikolog',
        'bidangPsikolog',
        'lamaKerja',
        'edukasiPsikolog',
        'deskripsiPsikolog',
        'namaAvaPsikolog',
    ];
}
