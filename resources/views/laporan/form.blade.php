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
        <input type="text" name="nama_pelapor"
               value="{{ old('nama_pelapor') }}"
               placeholder="Masukkan nama pelapor" required>

        <label>Lokasi Kejadian</label>
        <input type="text" name="lokasi"
               value="{{ old('lokasi') }}"
               placeholder="Masukkan lokasi kejadian" required>

        <label>Tinggi Genangan Air (cm)</label>
        <input type="number" name="tinggi_genangan"
               value="{{ old('tinggi_genangan') }}"
               placeholder="Contoh: 50" min="0" required>

        <label>Tanggal Kejadian</label>
        <input type="date" name="tanggal_kejadian"
               value="{{ old('tanggal_kejadian') }}" required>

        <button type="submit">Kirim Laporan</button>
    </form>
</div>
@endsection
