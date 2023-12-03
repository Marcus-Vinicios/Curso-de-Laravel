@extends('layouts.main')
@section('title', 'Mark-Events')
@section('content')
    <div id="search-container" class="col-md-12">
        <form action="">
            <div class="search">
                <input type="text" id="search" name="search" placeholder="Busque por um Evento">
                <button class="btn btn-primary ">
                    <ion-icon name="search-outline"></ion-icon>
                    Pesquisar
                </button>
            </div>
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div class="cards-container">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    @if ($event->image)
                        <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                    @else
                        <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}">
                    @endif
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="/events/{{ $event->id }}/show" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
