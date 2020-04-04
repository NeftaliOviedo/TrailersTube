@extends('welcome')
@section('edit')
    <div class="container-fluid photos">
      <div class="row justify-content-center">
        
        <div class="col-md-6 pt-4"  data-aos="fade-up">
          <h2 class="text-white mb-4">Edit Movie</h2>


              <div class="row">
                <div class="col-md-12">

                  

                  <form method="POST" action="/movies/{{$movie->id}}">
                    @csrf
                    @method('PUT')

                    <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-white" for="title">Title</label>
                        <input type="text" value="{{$movie->title}}" value="{{old('title')}}" name="title" id="title" class="form-control">
                          @if($errors->has('title'))
                          <p style="color:red">{{ $errors->first('title') }}</p>
                        @endif
                      </div>
                      <div class="col-md-6">
                        <label class="text-white" for="releaseDate">Realese Date</label>
                        <input type="text" value="{{$movie->releaseDate}}" value="{{old('releaseDate')}}" name="releaseDate" id="releaseDate" class="form-control">
                        @if($errors->has('releaseDate'))
                          <p style="color:red">{{ $errors->first('releaseDate') }}</p>
                        @endif  
                    </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="image">Image Url</label> 
                        <input type="text" value="{{$movie->image}}" value="{{old('image')}}" name="image" id="image" class="form-control">
                      @if($errors->has('image'))
                          <p style="color:red">{{ $errors->first('image') }}</p>
                        @endif   
                    </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="trailer">Trailer Embed</label> 
                        <input type="text" value="{{$movie->trailer}}" value="{{old('trailer')}}" name="trailer" id="trailer" class="form-control">
                        @if($errors->has('trailer'))
                          <p style="color:red">{{ $errors->first('trailer') }}</p>
                        @endif
                      </div>
                    </div>

                    <div class="row form-group mb-5">
                      <div class="col-md-12">
                        <label class="text-white" for="synopsis">Synopsis</label> 
                        <textarea name="synopsis" id="synopsis" cols="30" rows="7" class="form-control">{{$movie->synopsis}}</textarea>
                        @if($errors->has('synopsis'))
                          <p class="danger">{{ $errors->first('synopsis') }}</p>
                        @endif
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-9">
                        <input type="submit" value="Update" class="btn btn-success btn-md text-white">
                      </div>
                    </div>
                  </div>
                </form>
            
              </div>
        </div>
        
      </div>
    </div>
    @endsection