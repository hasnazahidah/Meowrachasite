@extends('sb-admin/app')
@section('title', 'Penitipan')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Data Penitipan</h1>

    <form action="/penitipan/{{$penitipan->id}}" method="POST">
        @csrf
        @method('PATCH')
        
        <div class="form-group">
            <label for="tanggal_titip">Tanggal Titip</label>
            <input type="date" class="form-control" id="tanggal_titip" name="tanggal_titip" value="{{ $penitipan->tanggal_titip }}" required>
        </div>

        <div class="form-group">
            <label for="tanggal_checkout">Tanggal Checkout</label>
            <input type="date" class="form-control" id="tanggal_checkout" name="tanggal_checkout" value="{{ $penitipan->tanggal_checkout }}" required>
        </div>

        <div class="form-group">
            <label for="lama_titip">Lama Titip (hari)</label>
            <input type="text" class="form-control" id="lama_titip" name="lama_titip" value="{{ $penitipan->lama_titip }}" readonly placeholder="Akan dihitung otomatis">
        </div>

        <div class="form-group">
            <label for="layanan">Jenis Pelayanan</label>
            <select class="form-control" id="layanan" name="layanan" value="{{ $penitipan->layanan }}" required>
                <option value="Grooming">Grooming</option>
                <option value="Pelayanan Medis">Pelayanan Medis</option>
                <option value="Akupuntur Kucing">Akupuntur Kucing</option>
                </select>
                @error('layanan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="antar_jemput">Antar Jemput</label>
            <select class="form-control" id="antar_jemput" name="antar_jemput" value="{{ $penitipan->antar_jemput }}" required>
            <option value="Yes">Ya</option>
                <option value="No">Tidak</option>
            </select>
            @error('antar_jemput')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
        <a href="/penitipan" class="btn btn-secondary btn-sm">Kembali</a>
    </form>

    <script>
        // JavaScript untuk menghitung lama titip
        document.getElementById('tanggal_checkout').addEventListener('change', calculateDays);
        document.getElementById('tanggal_titip').addEventListener('change', calculateDays);

        function calculateDays() {
            const startDate = new Date(document.getElementById('tanggal_titip').value);
            const endDate = new Date(document.getElementById('tanggal_checkout').value);

            if (startDate && endDate && endDate >= startDate) {
                const timeDifference = endDate - startDate;
                const daysDifference = timeDifference / (1000 * 3600 * 24); // Konversi milisecond ke hari
                document.getElementById('lama_titip').value = daysDifference;
            } else {
                document.getElementById('lama_titip').value = '';
            }
        }
    </script>
@endsection
