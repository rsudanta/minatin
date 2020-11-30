<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    protected $fillable=[
        'detail_id','soal','opsi_1','opsi_2','opsi_3','opsi_4'
    ];

    protected $table = 'soal';
    
    public function detail_psikotest(){
        return $this->belongsTo(DetailPsikotest::class,'detail_id','id');
    }
}
