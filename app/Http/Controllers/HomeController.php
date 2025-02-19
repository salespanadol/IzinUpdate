<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Izin;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $query = Izin::with('staff');

        if ($request->has('search') && !empty($request->search)) {
            $query->whereHas('staff', function ($q) use ($request) {
                $q->where('nama_staff', 'like', '%' . $request->search . '%');
            });
        }

        $data = $query->get();

        return view('home', compact('data'));
    }
}
