<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Izin;
use App\Models\Staff;

class IzinController extends Controller
{
    public function edit($id)
    {
        $izin = Izin::findOrFail($id);
        $staff = Staff::all();
        return view('edit_form', compact('izin', 'staff'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_staff' => 'required',
            'jam_keluar' => 'required',
            'jam_masuk' => 'required',
            'keperluan' => 'required',
            'keterangan' => 'nullable',
            'status' => 'required',
            'pemberi_izin' => 'required'
        ]);

        $izin = Izin::findOrFail($id); // Jika data tidak ditemukan, otomatis akan error 404
        $izin->update([
            'id_staff' => $request->id_staff,
            'jam_keluar' => $request->jam_keluar,
            'jam_masuk' => $request->jam_masuk,
            'keperluan' => $request->keperluan,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
            'pemberi_izin' => $request->pemberi_izin
        ]);

        return redirect('/')->with('success', 'Data izin berhasil diperbarui');
    }


    public function destroy($id)
    {
        $izin = Izin::findOrFail($id);
        $izin->delete();

        return redirect('/')->with('success', 'Data izin berhasil dihapus');
    }
}
