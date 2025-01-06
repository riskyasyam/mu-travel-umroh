<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumentasi;

class DokumentasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokumentasi = Dokumentasi::all();
        return view('admin.dokumentasi', compact('dokumentasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dokumentasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'url_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fotoPath = $request->file('url_foto')->store('dokumentasi_umroh', 'public');

        $dokumentasi = new Dokumentasi();
        $dokumentasi->url_foto = $fotoPath;
        $dokumentasi->save();

        return redirect()->route('admin.dokumentasi.create')->with('success', 'Dokumentasi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dok = Dokumentasi::findOrFail($id);
        return view('admin.dokumentasi.show', compact('dok'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dok = Dokumentasi::findOrFail($id);
        return view('admin.dokumentasi.edit', compact('dok'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);

        $request->validate([
            'url_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('url_foto')) {
            $fotoPath = $request->file('url_foto')->store('dokumentasi_umroh', 'public');
            $dokumentasi->url_foto = $fotoPath;
        }

        $dokumentasi->save();

        return redirect()->route('admin.dokumentasi.edit', $id)->with('success', 'Dokumentasi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dok = Dokumentasi::findOrFail($id);
        $dok->delete();

        return redirect()->route('admin.dokumentasi')->with('success', 'Dokumentasi berhasil dihapus.');
    }

    public function getDokumentasi()
    {
        $dokumentasi = Dokumentasi::all();

        return view('pages.index', compact('dokumentasi'));
    }
}