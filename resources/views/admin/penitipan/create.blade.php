@extends('sb-admin/app')
@section('title', 'penitipan')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Penitipan</h1>

    <form action="/penitipan" method="POST">
        @csrf
        <div class="form-group">
            <label for="tanggal_titip">Tanggal Titip</label>
            <input type="date" class="form-control" id="tanggal_titip" name="tanggal_titip">
            @error('tanggal_titip')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="tanggal_checkout">Tanggal checkout</label>
            <input type="date" class="form-control" id="tanggal_checkout" name="tanggal_checkout">
            @error('tanggal_checkout')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="lama_titip">lama titip</label>
            <input type="text" class="form-control" id="lama_titip" name="lama_titip">
            @error('lama_titip')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="layanan">Jenis Pelayanan</label>
            <p>- Grooming</p>
            <p>- Pelayanan Medis</p>
            <p>- Akupuntur Kucing</p>
            <input type="text" class="form-control" id="layanan" name="layanan">
            @error('layanan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="antar_jemput">antar jemput</label>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Ya
  </label>

  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Tidak
  </label>
</div>
  
            @error('antar_jemput')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
        <a href="/penitipan" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection