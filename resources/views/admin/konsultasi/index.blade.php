@extends('sb-admin/app')
@section('title', 'konsultasi')


@section('content')
{{-- flashdata --}}
    {!! session('sukses') !!}

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">konsultasi</h1>

    <a href="/konsultasi/create/" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Konsultasi</a>


  
        <table class="table mt-4 table-hover table-bordered">
        <thead>
                <tr>
                <th scope="col">Nama Konsultan</th>
                <th>
                </tr>
        </thead>
        <tbody>
                @foreach ($konsultasi as $row)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$row->nama_konsultan}}</td>
                    <td width="20%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/konsultasi/{{$row->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i> Edit</a>
                        <form action="/konsultasi/{{$row->id}}" method="post">
                        @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                        </form>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
        {{$konsultasi->links()}}
        

@endsection

        