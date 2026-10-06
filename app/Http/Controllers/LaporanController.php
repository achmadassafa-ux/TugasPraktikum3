<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function form()
    {
        return view('laporan.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'tinggi' => 'required|numeric|min:0',
        ]);

        $laporan = [
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'tinggi' => $request->tinggi,
        ];

        return view('laporan.konfirmasi', compact('laporan'));
    }

    public function index()
    {
        $laporan = [
            [
                'nama' => 'Andi',
                'lokasi' => 'Baleendah',
                'tinggi' => 25,
            ],
            [
                'nama' => 'Budi',
                'lokasi' => 'Dayeuhkolot',
                'tinggi' => 50,
            ],
            [
                'nama' => 'Citra',
                'lokasi' => 'Bojongsoang',
                'tinggi' => 85,
            ],
        ];

        return view('laporan.index', compact('laporan'));
    }
}