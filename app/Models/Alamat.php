<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory; 

    protected $fillable = [
        'nama', 'email', 'kelas', 'nomor_telepon', 'alamat', 'nama_barang', 'harga'
    ];
}
