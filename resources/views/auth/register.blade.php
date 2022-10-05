@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" novalidate>
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12 d-flex justify-content-center">
                                <img id="photo_preview" src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp" class="rounded-circle mb-3 shadow" style="width: 150px;"alt="Avatar" />
                            </div>
                            
                            <div class="d-flex justify-content-center col-md-12">
                                <div class="file-select zoom" id="photo" >
                                    <input onchange="previewFile(this, 'photo_preview')" type="file" id="foto" name="foto" aria-label="Archivo">
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input placeholder="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input placeholder="E-Mail Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">

                          
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                   
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('auth.stylos.stylos')
@include('auth.Js.Js')
@endsection
