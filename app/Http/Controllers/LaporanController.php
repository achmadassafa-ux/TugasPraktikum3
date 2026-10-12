<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function form()
    {
        return view('laporan.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tinggi_genangan' => 'required|integer|min:0',
            'tanggal_kejadian' => 'required|date',
        ]);

        $laporan = Laporan::create($validated);

        return view('laporan.konfirmasi', compact('laporan'));
    }

    public function index()
    {
        $laporan = Laporan::all();

        return view('laporan.index', compact('laporan'));
    }
}
