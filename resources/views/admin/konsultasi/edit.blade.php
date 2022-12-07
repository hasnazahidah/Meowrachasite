@extends('sb-admin/app')
@section('title', 'konsultasi')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">konsultasi</h1>

    <form action="/konsultasi/{{$konsultasi->id}}" method="konsultasi" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        
        <div class="form-group">
            <label for="nama_konsultan">Nama Konsultan</label>
            <input type="text" class="form-control" id="nama_konsultan" name="nama_konsultan" value="{{old('nama_konsultan') ? old('nama_konsultan') : $konsultasi->nama_konsultan}}">
            @error('nama_konsultan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
        <a href="/konsultasi" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection

