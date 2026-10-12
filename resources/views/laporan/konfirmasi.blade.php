@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
<div class="card">
    <x-alert
        type="success"
        message="Laporan banjir berhasil disimpan ke database!"
    />

    <h2>Data Laporan</h2>

    <p>
        <strong>Nama Pelapor:</strong>
        {{ $laporan->nama_pelapor }}
    </p>

    <p>
        <strong>Lokasi Kejadian:</strong>
        {{ $laporan->lokasi }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $laporan->tinggi_genangan }} cm
    </p>

    <p>
        <strong>Tanggal Kejadian:</strong>
        {{ $laporan->tanggal_kejadian }}
    </p>

    <a href="{{ route('laporan.form') }}">Kembali ke Form</a>
    |
    <a href="{{ route('laporan.index') }}">Lihat Daftar Laporan</a>
</div>
@endsection
