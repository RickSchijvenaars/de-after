@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex">
        <div class="col-md-6">
            <h1>The finest tunes</h1>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe 
                    class="embed-responsive-item"
                    src="https://www.youtube.com/embed/36YnV9STBqc"
                    frameborder="0" 
                    allowfullscreen
                >
                </iframe>
            </div>
        </div>

        <div class="col-md-6">
            <h1>Speeddates</h1><br>
            <b>Speeddate 1:</b><br>
            <h2><span id="demo"></span></h2>
            <div class="teamslink d-none">
                <a href="{{ route('date', ['id' => 1]) }}" target="_blank">Klik om speeddate te joinen</a>
            </div>
        </div>
        
    </div>
</div>
@endsection
