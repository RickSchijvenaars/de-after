@extends('layouts.app')

@section('content')
<video autoplay muted loop class="page-background">
    <source src="media/background.mp4" type="video/mp4">
</video>
<img src="/media/logo-breed.png" class="position-absolute logo-small"></img>
<div class="dashboard-container container-fluid">
    <div class="row d-flex">
        <div class="col-lg-6">
            <div class="d-flex flex-column dashboard-item p-4 rounded-lg">
                <div class="text-center">
                    <h1>The finest tunes</h1> 
                </div>
                <div class="d-flex flex-column align-items-center h-100">
                    <div class="my-auto dashboard-livestream-iframe-container rounded-lg embed-responsive embed-responsive-16by9">
                        <iframe 
                            class="dashboard-livestream-iframe embed-responsive-item"
                            src="https://embed.restream.io/player/index.htmltoken=75fa8?311f8a5180444940a0d7242e1ad?autoplay=1" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen
                        >
                        </iframe>
                    </div>
                    <a href="https://www.mixcloud.com/live/DeAfterNL/" target="_blank" class="text-reset text-decoration-none">Klik hier als de stream offline is!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="d-flex flex-column dashboard-item p-4 rounded-lg">
                <div class="text-center">
                    <h1>Timetable</h1>
                </div>
                <div class="d-flex overflow-auto">
                    <div class="row m-0 dashboard-timetable w-100">
                        <div class="col-1 p-0">
                            <div class="dashboard-timetable-item-60 border-top">
                                22:00
                            </div>
                            <div class="dashboard-timetable-item-60 border-top">
                                23:00
                            </div>
                            <div class="dashboard-timetable-item-60 border-top">
                                00:00
                            </div>
                            <div class="dashboard-timetable-item-60 border-top">
                                01:00
                            </div>
                            <div class="dashboard-timetable-item-60 border-top">
                                02:00
                            </div>
                            <div class="dashboard-timetable-item-60 border-top">
                                03:00
                            </div>
                            <div class="dashboard-timetable-item-60 border-top">
                                04:00
                            </div>
                        </div>
                        <div class="p-0 col-5">
                            <div class="dashboard-timetable-item-60 dashboard-timetable-item-bg-artist border d-flex align-items-center justify-content-center">
                                Rausch
                            </div>
                            <div class="dashboard-timetable-item-90 border d-flex align-items-center justify-content-center">
                                Upperflow
                            </div>
                            <div class="dashboard-timetable-item-90 dashboard-timetable-item-bg-artist border d-flex align-items-center justify-content-center">
                                Nimbala
                            </div>
                            <div class="dashboard-timetable-item-90 border d-flex align-items-center justify-content-center">
                                Gate44
                            </div>
                            <div class="dashboard-timetable-item-90 dashboard-timetable-item-bg-artist border d-flex align-items-center justify-content-center">
                                Samuel Dictus 
                            </div>
                        </div>
                        <div class="p-0 col-5">
                            <div class="dashboard-timetable-item-45 border d-flex align-items-center justify-content-center">
                            </div>
                            <div class="dashboard-timetable-item-15 dashboard-timetable-item-bg-activity border d-flex align-items-center justify-content-center">
                                <span class="activity-0-announcement">Bekend om 22:45</span>    
                                <span class="activity-0 d-none" role="button" data-toggle="popover" tabindex="0" data-trigger="focus" 
                                    title="Two Truths And A Lie" 
                                    data-content="Bij deze opdracht vertelt één persoon telkens twee waarheden en een leugen. Aan de rest van de groep is het nu de taak te achterhalen welk verhaal een leugen is en welke de waarheden."
                                >
                                    Activiteit 1 - Klik hier!
                                </span>
                            </div>
                            <div class="dashboard-timetable-item-45 border d-flex align-items-center justify-content-center">
                            </div>
                            <div class="dashboard-timetable-item-15 dashboard-timetable-item-bg-activity border d-flex align-items-center justify-content-center">
                                <span class="activity-1-announcement">Bekend om 23:45</span>     
                                <span class="activity-1 d-none"><a href="{{ route('date', ['id' => 1]) }}" target="_blank" class="text-white text-decoration-none">Datetime! Klik hier!</a></span>
                            </div>
                            <div class="dashboard-timetable-item-45 border d-flex align-items-center justify-content-center">
                            </div>
                            <div class="dashboard-timetable-item-15 dashboard-timetable-item-bg-activity border d-flex align-items-center justify-content-center">
                                <span class="activity-2-announcement">Bekend om 00:45</span>     
                                <span class="activity-2 d-none" role="button" data-toggle="popover" tabindex="0" data-trigger="focus" 
                                    title="Ketalympics" 
                                    data-content="Zachtlopen: Wie kan het langzaamst zonder te stoppen 10 meter overbruggen? 
                                                    Koprol eleganza: Wie kan de elegantste koprol maken? 
                                                    Vliegtuigjesvouwen: Wiens vliegtuigje overbrugt de grootste afstand? 
                                                    Kies voor elk onderdeel een jurylid."
                                >
                                    Activiteit 3 - Klik hier!
                                </span>
                            </div>
                            <div class="dashboard-timetable-item-45 border d-flex align-items-center justify-content-center">
                            </div>
                            <div class="dashboard-timetable-item-15 dashboard-timetable-item-bg-activity border d-flex align-items-center justify-content-center">
                                <span class="activity-3-announcement">Bekend om 01:45</span>     
                                <span class="activity-3 d-none"><a href="{{ route('date', ['id' => 2]) }}" target="_blank" class="text-white text-decoration-none">Datetime! Klik hier!</a></span>
                            </div>
                            <div class="dashboard-timetable-item-45 border d-flex align-items-center justify-content-center">
                            </div>
                            <div class="dashboard-timetable-item-15 dashboard-timetable-item-bg-activity border d-flex align-items-center justify-content-center">
                                <span class="activity-4-announcement">Bekend om 02:45</span>     
                                <span class="activity-4 d-none" role="button" data-toggle="popover" tabindex="0" data-trigger="focus" 
                                    title="Verstoppertje" 
                                    data-content="Speel een ronde verstoppertje binnenshuis."
                                >
                                    Activiteit 5 - Klik hier!
                                </span>
                            </div>
                            <div class="dashboard-timetable-item-45 border d-flex align-items-center justify-content-center">
                            </div>
                            <div class="dashboard-timetable-item-15 dashboard-timetable-item-bg-activity border d-flex align-items-center justify-content-center">
                                <span class="activity-5-announcement">Bekend om 03:45</span>         
                                <span class="activity-5 d-none"><a href="{{ route('date', ['id' => 3]) }}" target="_blank" class="text-white text-decoration-none">Datetime! Klik hier!</a></span>
                            </div>
                            <div class="dashboard-timetable-item-45 border d-flex align-items-center justify-content-center">
                            </div>
                            <div class="dashboard-timetable-item-15 dashboard-timetable-item-bg-activity border d-flex align-items-center justify-content-center">
                                <span class="activity-6-announcement">Bekend om 04:45</span>             
                                <span class="activity-6 d-none" role="button" data-toggle="popover" tabindex="0" data-trigger="focus" 
                                    title="Op avontuur!" 
                                    data-content="Ga met je groep op avontuur in en rondom je huis."
                                >
                                    Activiteit 7 - Klik hier!
                                </span>
                            </div>
                        </div>
                        <div class="col-1 p-0">
                            <div class="dashboard-timetable-item-60 border-top">
                                22:00
                            </div>
                            <div class="dashboard-timetable-item-60 border-top">
                                23:00
                            </div>
                            <div class="dashboard-timetable-item-60 border-top">
                                00:00
                            </div>
                            <div class="dashboard-timetable-item-60 border-top">
                                01:00
                            </div>
                            <div class="dashboard-timetable-item-60 border-top">
                                02:00
                            </div>
                            <div class="dashboard-timetable-item-60 border-top">
                                03:00
                            </div>
                            <div class="dashboard-timetable-item-60 border-top">
                                04:00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div onclick="pageTitleNotification.off()" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nieuwe activiteit!</h5>
            <button onclick="pageTitleNotification.off()" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Tijd voor een nieuwe activiteit - Check de timetable!
        </div>
        <div class="modal-footer">
            <button onclick="pageTitleNotification.off()" type="button" class="btn text-white pink" data-dismiss="modal">OK</button>
        </div>
        </div>
    </div>
</div>
@endsection
