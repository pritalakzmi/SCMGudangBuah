<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buah extends Model
{
    protected $table = 'buah';
    protected $fillable = ['kategori_id','nama_buah','harga_per_box','stok_awal','stok_masuk','stok_keluar','stok_akhir'];
}
