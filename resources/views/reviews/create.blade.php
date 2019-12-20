@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/r" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row align">
                    <h1>Add New Review</h1>
                </div>

                <div class="row pb-2">
                    <label for="image" class="col-md-4 col-form-label">Upload Image:</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="review" class="col-md-4 col-form-label">Review:</label>
                    
                        <textarea id="review" type="text" class="form-control @error('review') is-invalid @enderror" 
                            rows="7" name="review" value="{{ old('review') }}" required autocomplete="review" autofocus></textarea>

                        @error('review')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="row">
                    <button class="btn btn-primary">post review</button>
                    <a href="{{ 'profiles.index' }}">cancel</a>
                </div>


            </div>
        </div>
    </form>

</div>
@endsection
