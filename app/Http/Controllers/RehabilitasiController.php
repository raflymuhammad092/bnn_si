<?php

namespace App\Http\Controllers;

use App\Models\Rehabilitasi;
use App\Models\Layanan;
use Illuminate\Http\Request;


class RehabilitasiController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return view('rehabilitasi.index', compact('layanan'));
    }

    public function store(request $request) {
        {
            // Lakukan validasi formulir jika diperlukan
            $request->validate([
                'nama' => 'required|string|max:255',
                'umur' => 'required|integer',
                'j_kel' => 'required',
                'alamat' => 'required|string|max:255',
                'tanggal_pelaksanaan' => 'required',
                'kontak' => 'required|string|max:15',
                'lokasi_pelaksanaan' => 'required',
                'layanan_id' => 'required',
                'user_id' => 'required',
            ]);

            Rehabilitasi::create($request->all());
    
            return redirect()->back()->with('success', 'Pendaftaran berhasil!');
        }
    }
}
