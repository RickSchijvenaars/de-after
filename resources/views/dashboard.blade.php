@extends('layouts.app')

@section('content')
<video autoplay muted loop class="page-background">
    <source src="media/background.mp4" type="video/mp4">
</video>
<div class="container-fluid">
    <div class="row d-flex">
        <div class="col-md-6">
            <div class="p-4 dashboard-item d-flex flex-column rounded-lg">
                <h1 class="position-absolute align-self-center">The finest tunes</h1>
                <div class="my-auto dashboard-livestream-iframe-container rounded-lg embed-responsive embed-responsive-16by9">
                    <iframe 
                        class="dashboard-livestream-iframe embed-responsive-item"
                        src="https://www.youtube.com/embed/36YnV9STBqc"
                        frameborder="0" 
                        allowfullscreen
                    >
                    </iframe>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="p-4 dashboard-item d-flex flex-column rounded-lg">
                <h1 class="position-absolute align-self-center">Timetable</h1><br>
                <div class="dashboard-timetable my-auto">
                    <b>Speeddate 1:</b><br>
                    <h2><span id="demo"></span></h2>
                    <div class="teamslink d-none">
                        <a href="{{ route('date', ['id' => 1]) }}" target="_blank">Klik om speeddate te joinen</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
