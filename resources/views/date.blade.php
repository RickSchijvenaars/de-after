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
            <div class="date-activity mt-5 p-2 w-100">    
                <h1>Complimentenronde</h1>
                <p class="date-activity-description h-100">
                    Vul snel je (groeps)naam in en klik op <i>Deelnemen aan de vergadering</i>, want het is tijd om nieuwe mensen te ontmoeten! <br>
                    <br>
                    Deze opdracht is heel simpel, wees lief en geef elkaar complimentjes!<br>
                    <br>
                    Klets wat met elkaar en geniet van het sociale contact en het eindelijk weer ontmoeten van gelijkgestemden!<br>
                    <br>
                    De activiteit duurt eigenlijk 15 minuten, maar als het heel gezellig is, mogen jullie nog wat langer blijven hangen!<br>
                    Hieronder zie je wanneer de call wordt afgesloten.
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
            <div class="date-activity mt-5 p-2 w-100">    
                <h1>Among Us</h1>
                <p class="date-activity-description h-100">
                    Vul snel je (groeps)naam in en klik op <i>Deelnemen aan de vergadering</i>, want het is tijd om nieuwe mensen te ontmoeten! <br>
                    <br>
                    Bij deze opdracht is het nodig om de game <i>Among Us</i> te downloaden op je telefoon. Iedereen heeft er van gehoord en waarschijnlijk hebben de meesten het ook al eens gespeeld.<br>
                    Meet elkaar in-game!<br>
                    <br>
                    Lukt het jullie op dit tijdstip nog om de bedrieger te vinden?<br>
                    <br>
                    De activiteit duurt eigenlijk 15 minuten, maar als het heel gezellig is, mogen jullie nog wat langer blijven hangen!<br>
                    Hieronder zie je wanneer de call wordt afgesloten.
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
            <div class="date-activity mt-5 p-2 w-100">    
                <h1>Tien overeenkomsten</h1>
                <p class="date-activity-description h-100">
                    Vul snel je (groeps)naam in en klik op <i>Deelnemen aan de vergadering</i>, want het is tijd om nieuwe mensen te ontmoeten! <br>
                    <br>
                    Bij deze opdracht moet je de andere groep beter leren kennen. Het is namelijk de bedoeling om overeenkomsten te vinden.<br>
                    <br>
                    Lukt het jullie om 10 overeenkomsten met de andere groep te vinden?<br>
                    <br>
                    De activiteit duurt eigenlijk 15 minuten, maar als het heel gezellig is, mogen jullie nog wat langer blijven hangen!<br>
                    Hieronder zie je wanneer de call wordt afgesloten.
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
