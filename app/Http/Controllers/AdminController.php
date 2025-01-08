<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use App\Models\Package;
use App\Models\Testimoni;

class AdminController extends Controller
{
    public function index()
    {
        session(['admin_active' => true]); // Menyimpan session bahwa admin aktif

        $packageCount = Package::count();
        $dokumentasiCount = Dokumentasi::count(); 
        $testimoniCount = Testimoni::count();

        return view('admin.dashboard', compact('packageCount', 'dokumentasiCount', 'testimoniCount'));
    }
}
