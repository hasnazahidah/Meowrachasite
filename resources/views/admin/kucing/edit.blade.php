@extends('sb-admin/app')
@section('title', 'Kucing')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Data Kucing</h1>

    <form action="/kucing/{{$kucing->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="nama_kucing">Nama Kucing</label>
            <input type="text" class="form-control" id="nama_kucing" name="nama_kucing" value="{{ old('nama_kucing', $kucing->nama_kucing) }}">
            @error('nama_kucing')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="ras">Ras Kucing</label>
            <input type="text" class="form-control" id="ras" name="ras" value="{{ old('ras', $kucing->ras) }}">
            @error('ras')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="gender">Jenis Kelamin</label>
            <input type="text" class="form-control" id="gender" name="gender" value="{{ old('gender', $kucing->gender) }}">
            @error('gender')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="umur">Umur Kucing</label>
            <input type="text" class="form-control" id="umur" name="umur" value="{{ old('umur', $kucing->umur) }}">
            @error('umur')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="merk_makanan">Merk Makanan</label>
            <input type="text" class="form-control" id="merk_makanan" name="merk_makanan" value="{{ old('merk_makanan', $kucing->merk_makanan) }}">
            @error('merk_makanan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
        <a href="/kucing" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection
