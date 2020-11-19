@extends('layouts.app')

@section('content')
    @if($id == 1)
        <iframe 
            allow="camera; microphone; fullscreen; display-capture"
            src="{{ Auth::user()->first_call }}" 
            class="speeddate-iframe vh-100 w-100 border-0"
        >
        </iframe>
    @elseif($id == 2)
        <iframe 
            allow="camera; microphone; fullscreen; display-capture"
            src="{{ Auth::user()->second_call }}" 
            class="speeddate-iframe vh-100 w-100 border-0"
        >
        </iframe>
    @elseif($id == 3)
        <iframe 
            allow="camera; microphone; fullscreen; display-capture"
            src="{{ Auth::user()->third_call }}" 
            class="speeddate-iframe vh-100 w-100 border-0"
        >
        </iframe>
    @endif
@endsection
