@extends('sb-admin/app')
@section('title', 'Konsultasi')

@section('content')
    <a href="/konsultasi/{{$konsultasi->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
    <a href="/konsultasi" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card mt-3">
        
        <div class="card-body">
            <p class="card-title">{{$konsultasi->nama_konsultan}}</p>
        </div>
    </div>
@endsection