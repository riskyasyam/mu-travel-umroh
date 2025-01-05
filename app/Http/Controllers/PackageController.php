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
        // Validasi input termasuk file gambar
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'foto_paket' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'harga' => 'required|numeric',
            'durasi' => 'required|integer',
            'tanggal' => 'required|date',
            'sisa_kursi' => 'required|integer',
            'hotel_madinah' => 'required|string|max:255',
            'hotel_makkah' => 'required|string|max:255',
            'pesawat' => 'required|string|max:255',
            'rating_makkah' => 'required|numeric|min:0|max:5',
            'rating_madinah' => 'required|numeric|min:0|max:5',
        ]);

        // Simpan gambar ke folder 'paket_umroh' dalam penyimpanan public
        $fotoPath = $request->file('foto_paket')->store('paket_umroh', 'public');

        // Simpan data ke database
        $packages = new Package();
        $packages->nama_paket = $request->input('nama_paket');
        $packages->foto_paket = $fotoPath; // Simpan path gambar
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

        return redirect()->route('admin.paket.create')->with('success', 'Paket berhasil ditambahkan.');
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
        $package = Package::findOrFail($id);
        return view('admin.paket.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $package = Package::findOrFail($id);
    
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'description' => 'required|string',
            'harga' => 'required|numeric',
            'durasi' => 'required|integer',
            'tanggal' => 'required|date',
            'hotel_madinah' => 'required|string|max:255',
            'rating_madinah' => 'required|numeric|min:0|max:5',
            'hotel_makkah' => 'required|string|max:255',
            'rating_makkah' => 'required|numeric|min:0|max:5',
            'pesawat' => 'required|string',
            'sisa_kursi' => 'required|integer',
        ]);
    
        if ($request->hasFile('foto_paket')) {
            $fotoPath = $request->file('foto_paket')->store('paket_umroh', 'public');
            $package->foto_paket = $fotoPath;
        }
    
        $package->update([
            'nama_paket' => $request->input('nama_paket'),
            'description' => $request->input('description'),
            'harga' => $request->input('harga'),
            'durasi' => $request->input('durasi'),
            'tanggal' => $request->input('tanggal'),
            'sisa_kursi' => $request->input('sisa_kursi'),
            'hotel_madinah' => $request->input('hotel_madinah'),
            'hotel_makkah' => $request->input('hotel_makkah'),
            'pesawat' => $request->input('pesawat'),
            'rating_makkah' => $request->input('rating_makkah'),
            'rating_madinah' => $request->input('rating_madinah'),
        ]);
    
        return redirect()->route('admin.paket.edit', $id)->with('success', 'Paket berhasil diperbarui.');
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
