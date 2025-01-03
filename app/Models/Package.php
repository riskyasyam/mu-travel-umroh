<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';

    protected $fillable = [
        'nama_paket',
        'foto_paket',
        'description',
        'harga',
        'durasi',
        'tanggal',
        'sisa_kursi',
        'hotel_madinah',
        'hotel_makkah',
        'pesawat',
        'rating_makkah',
        'rating_madinah'
    ];

    protected $casts = [
        'tanggal' => 'date', 
        'harga' => 'integer'
    ];
}
