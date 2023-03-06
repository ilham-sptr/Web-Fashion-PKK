<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cloting extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'kelas', 'image', 'avatar', 'title', 'content', 'harga', 'email', 'nomor_telepon', 'alamat'
    ];
}
