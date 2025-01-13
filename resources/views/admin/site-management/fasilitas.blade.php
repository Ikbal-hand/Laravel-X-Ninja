@extends('layouts.admin')

@section('content')
    <h1>Fasilitas Kampus</h1>
    <a href="{{ route('admin.fasilitas.create') }}">Tambah Fasilitas</a>
    <ul>
        @foreach ($fasilitas as $item)
            <li>{{ $item->nama }} - {{ $item->deskripsi }}</li>
        @endforeach
    </ul>
@endsection
