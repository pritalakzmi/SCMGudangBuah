<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truk extends Model
{
    protected $table = 'truk';
    protected $fillable = ['no_polisi','merk_kendaraan','user_id'];
}
