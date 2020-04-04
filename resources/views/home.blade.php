@extends('welcome')

@section('movies')
<div class="container-fluid photos">
      <div class="row align-items-stretch">
        @foreach ($movies as $movie)
            
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <a href="{{route('showDetail',$movie)}}" class="d-block photo-item">
            <img src="{{$movie->image}}" style="width:400px; height: 380px" height="299" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
                <h3 class="heading">{{$movie->title}}</h3>
                <span class="meta">{{$movie->releaseDate}}</span>
              </div>
            </div>
          </div>        
        </a>
        
        @endforeach

      </div>
    </div>@endsection
