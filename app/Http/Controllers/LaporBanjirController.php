<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function create()
    {
        return view('lapor.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('lapor.konfirmasi');
    }

    public function konfirmasi()
    {
        return view('lapor.konfirmasi');
    }

    public function index()
    {
        $daftarLaporan = [
            ['nama' => 'Ujang', 'lokasi' => 'Baleendah', 'tinggi_air' => 25],
            ['nama' => 'Asep', 'lokasi' => 'Dayeuhkolot', 'tinggi_air' => 50],
            ['nama' => 'Siti', 'lokasi' => 'Bojongsoang', 'tinggi_air' => 80],
        ];

        return view('laporan.index', compact('daftarLaporan'));
    }
}