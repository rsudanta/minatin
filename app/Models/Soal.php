<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    protected $fillable=[
        'detail_id','soal'
    ];

    protected $table = 'soal';
    
    public function detail_psikotest(){
        return $this->belongsTo(DetailPsikotest::class,'detail_id','id');
    }

    public function opsi() {
        return $this->hasMany(Opsi::class, 'soal_id', 'id');
    }
}
