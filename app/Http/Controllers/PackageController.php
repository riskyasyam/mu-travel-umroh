<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = [
            [
                'nama_paket' => 'Umroh 9 Hari',
                'tanggal' => '14 Agustus 2024',
                'durasi' => '9 Hari',
                'sisa_kursi' => '10 Kursi',
                'hotel_madinah' => 'Lutfi, Final Rehab, Materi Jiwar',
                'hotel_makkah' => 'Grand Zowar',
                'pesawat' => 'Lion Air',
                'harga' => 'Rp27.000.000',
                'rating_makkah' => 5,
                'rating_madinah' => 5
            ],
            [
                'nama_paket' => 'Umroh 16 Hari',
                'tanggal' => '15 September 2024',
                'durasi' => '16 Hari',
                'sisa_kursi' => '20 Kursi',
                'hotel_madinah' => 'Lutfi, Final Rehab, Materi Jiwar',
                'hotel_makkah' => 'Grand Zowar',
                'pesawat' => 'Lion Air',
                'harga' => 'Rp31.000.000',
                'rating_makkah' => 5,
                'rating_madinah' => 5,
            ],
            [
                'nama_paket' => 'Umroh 12 Hari',
                'tanggal' => '10 Januari 2025',
                'durasi' => '12 Hari',
                'sisa_kursi' => '10 Kursi',
                'hotel_madinah' => 'Lutfi, Final Rehab, Materi Jiwar',
                'hotel_makkah' => 'Grand Zowar',
                'pesawat' => 'Lion Air',
                'harga' => 'Rp29.000.000',
                'rating_makkah' => 5,
                'rating_madinah' => 5
            ],
        ];
        return view('pages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
