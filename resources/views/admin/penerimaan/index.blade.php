@extends('layouts.admin')

@section('content')
    <h1>Daftar Calon Mahasiswa</h1>
    <ul>
        @foreach ($calonMahasiswa as $item)
            <li>
                <a href="{{ route('admin.calon-mahasiswa.detail', $item->id) }}">{{ $item->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
