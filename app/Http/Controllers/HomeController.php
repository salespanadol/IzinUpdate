<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Staff;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil data izin beserta staff terkait
        $data = Izin::with('staff')->get();
        return view('home', compact('data'));
    }
}
