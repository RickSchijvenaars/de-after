@extends('layouts.app')

@section('content')
<video autoplay muted loop class="page-background">
    <source src="media/background.mp4" type="video/mp4">
</video>
<div class="logo-container">
</div>
<div class="w-100 m-auto">
    <div class="d-flex w-100 justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card-body py-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="key" class="text-white col-md-4 col-form-label text-md-right">SLEUTEL</label>

                        <div class="col-md-6">
                            <input id="key" class="@error('key') is-invalid @enderror col-12" name="key" value="{{ old('key') }}" required autofocus>

                            @error('key')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Onjuiste sleutel</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="">
                                Enter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
