<div class="card">
    <p><strong>Nama Pelapor:</strong> {{ $laporan['nama'] }}</p>
    <p><strong>Lokasi:</strong> {{ $laporan['lokasi'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $laporan['tinggi_air'] }} cm</p>
    
    <p><strong>Status:</strong> 
        @if($laporan['tinggi_air'] < 30)
            <span style="color: green;">Waspada</span>
        @elseif($laporan['tinggi_air'] >= 30 && $laporan['tinggi_air'] <= 70)
            <span style="color: orange;">Siaga</span>
        @else
            <span style="color: red;">Awas</span>
        @endif
    </p>
</div>