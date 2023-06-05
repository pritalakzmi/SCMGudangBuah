<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPengiriman extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['tgl_kirim','jam_kirim','pengiriman_id'];
}
