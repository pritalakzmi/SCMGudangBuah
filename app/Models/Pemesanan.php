<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = ['outlet_id', 'buah_id', 'jml_pesanan', 'total_harga', 'status_pembayaran', 'status_pemesanan', 'tgl_pemesanan'];
}
