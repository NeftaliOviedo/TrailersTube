@extends('welcome')

@section('adminForm')
    <div class="container-fluid photos">
      <div class="row justify-content-center">
        
        <div class="col-md-6 pt-4"  data-aos="fade-up">
          <h2 class="text-white mb-4">Movie Register</h2>

          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <form method="POST" action="/movies">
                    @csrf
                    <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-white" for="title">Title</label>
                      <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control">
                        @if($errors->has('title'))
                      <p style="color:red">{{ $errors->first('title') }}</p>
                        @endif
                      </div>
                      <div class="col-md-6">
                        <label class="text-white" for="releaseDate">Realese Date</label>
                        <input type="text" name="releaseDate" value="{{old('releaseDate')}}" id="releasedate" class="form-control">
                          @if($errors->has('releaseDate'))
                              <p style="color:red">{{ $errors->first('releaseDate') }}</p>
                          @endif
                      </div>
                    </div>
                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="image">Image Url</label> 
                        <input type="text" name="image" id="image" value="{{old('image')}}" class="form-control">
                        @if($errors->has('image'))
                          <p style="color:red">{{ $errors->first('image') }}</p>
                        @endif
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="trailer">Trailer Embed</label> 
                        <input type="text"name="trailer" id="trailer" value="{{old('trailer')}}" class="form-control">
                        @if($errors->has('trailer'))
                          <p style="color:red">{{ $errors->first('trailer') }}</p>
                        @endif
                      </div>
                    </div>

                    <div class="row form-group mb-5">
                      <div class="col-md-12">
                        <label class="text-white" for="synopsis">Synopsis</label> 
                        <textarea name="synopsis" id="synopsis" cols="30" rows="7" class="form-control">{{old('synopsis')}}</textarea>
                        @if($errors->has('synopsis'))
                          <p style="color:red">{{ $errors->first('synopsis') }}</p>
                        @endif
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" value="Submit" class="btn btn-primary btn-md text-white">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

          @endsection