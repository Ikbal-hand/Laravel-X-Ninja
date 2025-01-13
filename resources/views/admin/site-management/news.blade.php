@extends('layouts.admin')

@section('content')
    <h1>News Report</h1>
    <a href="{{ route('admin.news.create') }}">Tambah Berita</a>
    <ul>
        @foreach ($berita as $item)
            <li>{{ $item->title }} - {{ $item->penulis }}</li>
        @endforeach
    </ul>
@endsection
