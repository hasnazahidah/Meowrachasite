@extends('artikel/template/app')

@section('content')
   

    

    <h2 class="my-4 text-center">@yield('title')</h2>

    <div class="d-flex justify-content-center">
        
    </div>

    
        <div class="row mt-4">
            @foreach ($artikel as $row)
                    <div class="col-md-4 mt-5">
                        <div class="card shadow-sm">
                            <a href="/{{$row->slug}}"><img src="/upload/post/{{$row->sampul}}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">{{$row->judul}}</h5>
                                <p class="card-text"><small class="text-muted">{{$row->created_at->diffForHumans()}}</small></p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">{{$artikel->links()}}</div>
        
   
@endsection