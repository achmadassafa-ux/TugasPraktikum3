<div class="card">

    <h3>{{ $laporan['nama'] }}</h3>

    <p>
        <strong>Lokasi:</strong>
        {{ $laporan['lokasi'] }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $laporan['tinggi'] }} cm
    </p>

    <p>
        <strong>Status:</strong>

        @if ($laporan['tinggi'] < 30)

            <span style="color: green;">
                Waspada
            </span>

        @elseif ($laporan['tinggi'] <= 70)

            <span style="color: orange;">
                Siaga
            </span>

        @else

            <span style="color: red;">
                Awas
            </span>

        @endif

    </p>

</div>