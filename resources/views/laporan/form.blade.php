@extends('layouts.app')

@section('title', 'Form Laporan')

@section('content')

<div class="card">

    <h2>Form Pelaporan Banjir</h2>

    @if ($errors->any())

        <div>
            <strong>Terjadi kesalahan:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="{{ route('laporan.store') }}" method="POST">

        @csrf

        <label>Nama Pelapor</label>
        <input
            type="text"
            name="nama"
            placeholder="Masukkan nama pelapor"
            value="{{ old('nama') }}"
        >

        <label>Lokasi Kejadian</label>
        <input
            type="text"
            name="lokasi"
            placeholder="Masukkan lokasi kejadian"
            value="{{ old('lokasi') }}"
        >

        <label>Tinggi Genangan Air (cm)</label>
        <input
            type="number"
            name="tinggi"
            placeholder="Contoh: 50"
            value="{{ old('tinggi') }}"
        >

        <button type="submit">
            Kirim Laporan
        </button>

    </form>

</div>

@endsection