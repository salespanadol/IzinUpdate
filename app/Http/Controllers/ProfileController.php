<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Izin;

class ProfileController extends Controller
{
    public function index()
    {
        // Ambil data staff yang sedang login (misalnya id=1, ganti sesuai logika autentikasi)
        $staff = Staff::find(1); // Sesuaikan dengan sesi atau autentikasi
        return view('profile', compact('staff'));
    }
}
