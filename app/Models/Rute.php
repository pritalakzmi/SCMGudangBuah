<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    protected $table = 'rute';
    protected $fillable = ['pengiriman_id','truk_rute'];
}
