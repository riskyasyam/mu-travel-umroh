<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('admin.testimoni', compact('testimoni'));
    }

    public function create()
    {
        return view('admin.testimoni.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'foto_testimoni' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fotoPath = $request->file('foto_testimoni')->store('testimoni_umroh', 'public');

        $testimoni = new Testimoni();
        $testimoni->foto_testimoni = $fotoPath;
        $testimoni->save();

        return redirect()->route('admin.testimoni.create')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $testimoni = Testimoni::findOrFail($id);
        return view('admin.testimoni.show', compact('testimoni'));
    }

    public function edit(string $id)
    {
        $testimoni = Testimoni::findOrFail($id);
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, string $id)
    {
        $testimoni = Testimoni::findOrFail($id);

        $request->validate([
            'foto_testimoni' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('url_foto')) {
            $fotoPath = $request->file('foto_testimoni')->store('testimoni_umroh', 'public');
            $testimoni->foto_testimoni = $fotoPath;
        }

        $testimoni->save();

        return redirect()->route('admin.testimoni.edit', $id)->with('success', 'Dokumentasi berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();

        return redirect()->route('admin.testimoni')->with('success', 'Testimoni berhasil dihapus.');
    }

    public function getTestimoni()
    {
        $testimoni = Testimoni::all();
        return view('pages.index', compact('testimoni'));
    }
}
