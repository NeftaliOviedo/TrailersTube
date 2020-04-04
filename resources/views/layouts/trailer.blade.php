@extends('welcome')

@section('info')
      <h2 style="padding:20px" class="text-white mb-4" data-aos="fade-up">Details</h2>
      <div  style="padding-left:200px" class="row ">
        
        <div class="col-md-6 pt-4"  data-aos="fade-up">
          <h3 class="padding-bottom:5px">{{$movie->title}}</h3>
          <h5>Synopsis</h5>
        <p>{{$movie->synopsis}}</p>
              <p><strong>
                  {{$movie->releaseDate}}
                </strong>
              </p>
              <div >
                <?=$movie->trailer?>
              </div>
            </div>
          </div> 
          
          @endsection