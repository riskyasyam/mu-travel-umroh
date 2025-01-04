<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view('pages.index', compact('packages'));
    }

    public function tampil()
    {
        $packages = DB::table('packages')->get();
        return view('admin.paket', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.paket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $packages = new Package();
        $packages->nama_paket = $request->input('nama_paket');
        $packages->foto_paket = $request->input('foto_paket');
        $packages->description = $request->input('description');
        $packages->harga = $request->input('harga');
        $packages->durasi = $request->input('durasi');
        $packages->tanggal = $request->input('tanggal');
        $packages->sisa_kursi = $request->input('sisa_kursi');
        $packages->hotel_madinah = $request->input('hotel_madinah');
        $packages->hotel_makkah = $request->input('hotel_makkah');
        $packages->pesawat = $request->input('pesawat');
        $packages->rating_makkah = $request->input('rating_makkah');
        $packages->rating_madinah = $request->input('rating_madinah');
        $packages->save();

        return redirect()->route('admin.paket')->with('success', 'Paket berhasil ditambahkan.');
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
        return view('admin.paket.edit');
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
        $package = Package::find($id);

        if (!$package) {
            return redirect()->route('admin.paket')->with('error', 'Paket tidak ditemukan.');
        }

        $package->delete();

        return redirect()->route('admin.paket')->with('success', 'Paket berhasil dihapus.');
    }
}
