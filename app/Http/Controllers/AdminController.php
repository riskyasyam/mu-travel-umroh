<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        session(['admin_active' => true]); // Menyimpan session bahwa admin aktif
        $packageCount = Package::count();
        return view('admin.dashboard', compact('packageCount'));
    }
}
