<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPsikotest extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id','judul','deskripsi_psikotest','harga','jumlah_soal','slug'
    ];

    protected $table = 'detail_psikotest';
    
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
