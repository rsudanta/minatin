<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;

    protected $fillable=[
        'detail_id','soal_id','user_id','jawaban'
    ];

    protected $table = 'hasil';
    
    public function detail_psikotest(){
        return $this->belongsTo(DetailPsikotest::class,'detail_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function soal(){
        return $this->belongsTo(Soal::class,'soal_id','id');
    }
    public function opsi(){
        return $this->belongsTo(Opsi::class,'opsi_id','id');
    }
}
