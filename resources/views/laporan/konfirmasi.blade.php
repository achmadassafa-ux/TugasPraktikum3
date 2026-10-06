@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')

<div class="card">

    <x-alert
        type="success"
        message="Laporan banjir berhasil dikirim!"
    />

    <h2>Data Laporan</h2>

    <p>
        <strong>Nama Pelapor:</strong>
        {{ $laporan['nama'] }}
    </p>

    <p>
        <strong>Lokasi Kejadian:</strong>
        {{ $laporan['lokasi'] }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $laporan['tinggi'] }} cm
    </p>

    <a href="{{ route('laporan.form') }}">
        Kembali ke Form
    </a>

</div>

@endsection