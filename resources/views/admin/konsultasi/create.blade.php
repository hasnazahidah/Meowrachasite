@extends('sb-admin/app')
@section('title', 'konsultasi')


@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Konsultasi</h1>

    <form action="/konsultasi" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_konsultan">Nama Konsultan</label>
            <input type="text" class="form-control" id="nama_konsultan" name="nama_konsultan" value="{{old('nama_konsultan')}}">
            @error('nama_konsultan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
        <a href="/konsultasi" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection

