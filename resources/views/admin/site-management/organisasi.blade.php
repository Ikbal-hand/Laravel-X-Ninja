@extends('layouts.admin')

@section('content')
    <h1>Organisasi Mahasiswa</h1>
    <a href="{{ route('admin.organisasi.create') }}">Tambah Organisasi</a>
    <ul>
        @foreach ($organisasi as $item)
            <li>{{ $item->nama }} - {{ $item->deskripsi }}</li>
        @endforeach
    </ul>
@endsection
