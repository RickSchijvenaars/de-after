@extends('layouts.app')

@section('content')
    <a href="{{ route('dashboard') }}" class="pink date-back text-decoration-none position-absolute text-white">🠜 Dashboard</a>
    
    @if($id == 1)
        <iframe 
            allow="camera; microphone; fullscreen; display-capture"
            src="{{ Auth::user()->first_call }}" 
            class="date-iframe vh-100 col-9 border-0"
        >
        </iframe>
        <div class="text-white col-3 d-flex flex-column justify-content-between vh-100 pink position-relative">
            <div class="date-activity p-2 w-100">    
                <h1>Complimentenronde</h1>
                <p class="date-activity-description h-100">
                    Geef de andere afterende groep een complimentje.
                </p>
            </div>
            <div class="date-countdown w-100 text-center">
                <hr>
                Gesprek wordt automatisch afgesloten over:
                <h1 id="countdown">
                </h1>
            </div>
        </div>
    @elseif($id == 2)
        <iframe 
            allow="camera; microphone; fullscreen; display-capture"
            src="{{ Auth::user()->second_call }}" 
            class="date-iframe vh-100 w-100 border-0"
        >
        </iframe>
        <div class="text-white col-3 d-flex flex-column justify-content-between vh-100 pink position-relative">
            <div class="date-activity p-2 w-100">    
                <h1>Among Us</h1>
                <p class="date-activity-description h-100">
                    Speel een ronde among us met de andere partij.
                </p>
            </div>
            <div class="date-countdown w-100 text-center">
                <hr>
                Gesprek wordt automatisch afgesloten over:
                <h1 id="countdown">
                </h1>
            </div>
        </div>
    @elseif($id == 3)
        <iframe 
            allow="camera; microphone; fullscreen; display-capture"
            src="{{ Auth::user()->third_call }}" 
            class="date-iframe vh-100 w-100 border-0"
        >
        </iframe>
        <div class="text-white col-3 d-flex flex-column justify-content-between vh-100 pink position-relative">
            <div class="date-activity p-2 w-100">    
                <h1>Tien overeenkomsten</h1>
                <p class="date-activity-description h-100">
                    Zoek 10 overeenkomsten met de andere afterende partij.
                </p>
            </div>
            <div class="date-countdown w-100 text-center">
                <hr>
                Gesprek wordt automatisch afgesloten over:
                <h1 id="countdown">
                </h1>
            </div>
        </div>
    @endif
@endsection
