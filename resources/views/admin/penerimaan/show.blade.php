@extends('layouts.admin')

@section('content')
    <h1>Detail Calon Mahasiswa</h1>
    <p>Name: {{ $calonMahasiswa->name }}</p>
    <p>Asal Sekolah: {{ $calonMahasiswa->asal_sekolah }}</p>
    <p>Jurusan: {{ $calonMahasiswa->jurusan }}</p>
    <p>Peminatan: {{ $calonMahasiswa->peminatan_program_study }}</p>
    <!-- Add other fields here -->
@endsection
