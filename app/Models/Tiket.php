<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable= ['nama_tiket','harga','stock','keterangan','image'];
    public function pesanan_detail()
    {
        return $this->hasMany('App\PesananDetail','tiket_id','id');
    }
}

