@extends('layouts.app')

@section('content')
    <h3>Daftar Laporan Kejadian Banjir</h3>
    
    @forelse($daftarLaporan as $laporan)
        @include('partials.laporan-card', ['laporan' => $laporan])
    @empty
        <p>Belum ada laporan banjir saat ini.</p>
    @endforelse
@endsection