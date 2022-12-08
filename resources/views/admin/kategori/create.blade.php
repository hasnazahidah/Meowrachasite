@extends('sb-admin/app')
@section('title', 'Kategori')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kategori</h1>

    <form action="/kategori" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_kategori">Kategori</label>
            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
            @error('nama_kategori')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
        <a href="/kategori" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection