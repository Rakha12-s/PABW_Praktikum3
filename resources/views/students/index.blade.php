@extends('layouts.main')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h2>Daftar Mahasiswa</h2>

    <x-alert type="error" message="Data berhasil dimuat!" />

    @foreach($students as $student)
        @include('partials.student-card', ['student' => $student])
    @endforeach
@endsection