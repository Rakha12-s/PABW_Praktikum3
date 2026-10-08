@extends('layouts.app')

@section('content')
    <h3>Form Pelaporan Banjir</h3>
    <form action="{{ route('lapor.store') }}" method="POST" class="card">
        @csrf
        <div style="margin-bottom: 10px;">
            <label>Nama Pelapor:</label><br>
            <input type="text" name="nama" required>
        </div>
        <div style="margin-bottom: 10px;">
            <label>Lokasi Kejadian:</label><br>
            <input type="text" name="lokasi" required>
        </div>
        <div style="margin-bottom: 10px;">
            <label>Tinggi Genangan Air (cm):</label><br>
            <input type="number" name="tinggi_air" required>
        </div>
        <button type="submit">Kirim Laporan</button>
    </form>
@endsection