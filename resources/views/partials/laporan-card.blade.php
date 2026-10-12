<div class="card">
    <h3>{{ $laporan->nama_pelapor }}</h3>

    <p>
        <strong>Lokasi:</strong>
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

    <p>
        <strong>Status:</strong>

        @if ($laporan->tinggi_genangan < 30)
            <span style="color: green;">Waspada</span>
        @elseif ($laporan->tinggi_genangan <= 70)
            <span style="color: orange;">Siaga</span>
        @else
            <span style="color: red;">Awas</span>
        @endif
    </p>
</div>
