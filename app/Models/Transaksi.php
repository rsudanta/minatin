<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id','detail_id','status'
    ];

    protected $table = 'transaksi';

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function detail_psikotest(){
        return $this->belongsTo(DetailPsikotest::class,'detail_id','id');
    }
}
