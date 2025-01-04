<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Package::create([
            'nama_paket' => 'Umroh 9 Hari',
            'foto_paket' => '/assets/images/umroh1.jpg',
            'description' => 'Paket Umroh 9 Hari Sangat Murah',
            'harga' => 29000000,
            'durasi' => 9,
            'tanggal' => '2023-06-01',
            'sisa_kursi' => 10,
            'hotel_madinah' => 'Madinah',
            'hotel_makkah' => 'Mecca',
            'pesawat' => 'Garuda Indonesia',
            'rating_makkah' => 5,
            'rating_madinah' => 5
        ]);
    }
}
