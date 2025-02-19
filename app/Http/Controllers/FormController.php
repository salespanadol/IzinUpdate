<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Staff;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        // Mengambil data staff untuk dipilih otomatis
        $staff = Staff::all();
        return view('form', compact('staff'));
    }

    public function store(Request $request)
    {
        Izin::create([
            'id_staff' => $request->id_staff,
            'jam_masuk' => $request->jam_masuk,
            'jam_keluar' => $request->jam_keluar,
            'keperluan' => $request->keperluan,
            'keterangan' => $request->keterangan,
            'status' => $request->status,  // Asumsi status default
            'pemberi_izin' => $request->pemberi_izin,
        ]);
        return redirect('/')->with('success', 'Data berhasil ditambahkan');
    }
}
