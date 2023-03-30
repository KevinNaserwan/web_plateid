<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';
    protected $fillable = ['nomor_plat', 'nama_pemilik', 'brand', 'type', 'manufacture_year', 'cc', 'updated_at', 'created_at', 'color', 'fuel_type', 'regist_year', 'date_exp'];
}
