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
            'file' => 'required|mimes:jpeg,png,jpg,gif,mp4,mov,avi|max:51200', // Validasi gambar & video
            'type' => 'nullable|in:image,video', // Opsional, akan ditentukan dari MIME type
        ]);

        if (!$request->hasFile('file')) {
            return back()->withErrors(['file' => 'File tidak ditemukan.']);
        }

        // Simpan file ke storage
        $file = $request->file('file');
        $filePath = $file->store('testimoni_umroh', 'public');
        $fileType = $file->getMimeType();

        // Tentukan tipe file (image/video)
        $type = str_contains($fileType, 'video') ? 'video' : 'image';

        // Simpan data ke database
        Testimoni::create([
            'file' => $filePath,
            'type' => $type,
        ]);

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
            'file' => 'required|mimes:jpeg,png,jpg,gif,mp4,mov,avi|max:51200', // Validasi gambar & video
            'type' => 'nullable|in:image,video', // Opsional, akan ditentukan dari MIME type
        ]);

        if (!$request->hasFile('file')) {
            return back()->withErrors(['file' => 'File tidak ditemukan.']);
        }

        // Simpan file ke storage
        $file = $request->file('file');
        $filePath = $file->store('testimoni_umroh', 'public');
        $fileType = $file->getMimeType();

        // Tentukan tipe file (image/video)
        $type = str_contains($fileType, 'video') ? 'video' : 'image';

        // Update data di database
        $testimoni->update([
            'file' => $filePath,
            'type' => $type,
        ]);

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
