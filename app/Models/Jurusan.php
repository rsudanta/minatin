<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    
    protected $fillable=[
        'jurusan1','jurusan2','jurusan3','alasan','hasil','order_id','user_id'
    ];

    protected $table = 'jurusan';
    
    public function order(){
        return $this->belongsTo(Transaksi::class,'order_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}


