<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opsi extends Model
{
    use HasFactory;

    protected $fillable=[
        'soal_id','opsi'
    ];

    protected $table = 'opsi';
    
    public function soal(){
        return $this->belongsTo(Soal::class,'soal_id','id');
    }
}
