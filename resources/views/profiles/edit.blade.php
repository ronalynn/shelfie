@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{$user->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row align">
                    <h1>Edit Profile</h1>
                </div>

                <div class="form-group row">
                    <label for="bio" class="col-md-4 col-form-label">About Me</label>

                    <input id="bio"
                           type="text"
                           class="form-control{{ $errors->has('bio') ? ' is-invalid' : '' }}"
                           name="bio"
                           value="{{ old('bio') }}"
                           autocomplete="bio" autofocus>

                        @error('bio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="row">
                    <button class="btn btn-primary">update profile</button>
                </div>


            </div>
        </div>
    </form>

</div>
@endsection
