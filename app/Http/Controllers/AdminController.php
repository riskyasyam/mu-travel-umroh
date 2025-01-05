<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use App\Models\Package;

class AdminController extends Controller
{
    public function index()
    {
        session(['admin_active' => true]); // Menyimpan session bahwa admin aktif

        $packageCount = Package::count();
        $dokumentasiCount = Dokumentasi::count(); // Menambahkan jumlah dokumentasi

        return view('admin.dashboard', compact('packageCount', 'dokumentasiCount'));
    }

}
