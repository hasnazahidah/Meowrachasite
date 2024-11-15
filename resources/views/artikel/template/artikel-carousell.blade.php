<!-- Container (Portfolio Section) -->

<!-- <div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Artikel</h2><br>
  @foreach ($artikel as $row)
    <div class="col-sm-4">
      <div class="thumbnail">
      <img src="/upload/post/{{$row->sampul}}" class="card-img-top" alt="..." width="400" height="300"></a>
        <p><strong>{{$row->judul}}</strong></p>
        <p>{{ $konten = substr($row->konten, 0, 80) }}...</p>
        <p class="card-text"><small class="text-muted">{{$row->created_at->diffForHumans()}}</small></p>
      </div>
    </div>
    @endforeach
    </div>
        <div class="d-flex justify-content-center mt-4">{{$artikel->links()}}</div>
  </div><br> -->

<style>
  #portfolio {
  background-color: #f8f9fa; /* Light background */
  padding-top: 20px;
}

#portfolio h2 {
  color: #333;
  font-weight: bold;
}

.card {
  border: 1px solid #ddd;
  border-radius: 8px;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
  overflow: hidden;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Elevation on hover */
}

.card-img-top {
  border-radius: 8px 8px 0 0;
}

.card-body {
  padding: 15px;
}

.card-title {
  font-size: 1.9rem;
  color: #333;
  font-weight: bold;
}

.card-text {
  color: #555;
  font-size: 1.5rem;
  line-height: 1.5;
}

.card-footer {
  background-color: #fff;
  padding: 10px 15px;
  text-align: right;
  border-top: none;
}

.d-flex {
  margin-top: 20px;
}

.thumbnail {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 15px;
}


</style>

  <!-- Container (Portfolio Section) -->
<div id="portfolio" class="container text-center my-5">
  <h2 class="mb-5">Artikel</h2>
  <div class="row">
    @foreach ($artikel as $row)
      <div class="col-md-4 mb-4 d-flex align-items-stretch">
        <div class="card h-100 shadow-sm border-0">
          <img src="/upload/post/{{$row->sampul}}" class="card-img-top" alt="Artikel Image" style="height: 200px; object-fit: cover;">
          <div class="card-body text-left">
            <h5 class="card-title font-weight-bold">{{$row->judul}}</h5>
            <p class="card-text">{{ Str::limit($row->konten, 80) }}...</p>
          </div>
          <div class="card-footer bg-white border-0 text-right">
            <small class="text-muted">{{$row->created_at->diffForHumans()}}</small>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <div class="d-flex justify-content-center mt-4">
    {{$artikel->links()}}
  </div>
</div>

