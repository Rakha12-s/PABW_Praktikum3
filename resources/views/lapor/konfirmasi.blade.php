@extends('layouts.app')

@section('content')
    <h3>Konfirmasi Pengiriman</h3>
    <x-bahaya>
        Laporan kejadian banjir Anda telah berhasil dikirim ke sistem kami.
    </x-bahaya>
    <br>
    <a href="{{ route('laporan.index') }}">Lihat Daftar Laporan</a>
@endsection