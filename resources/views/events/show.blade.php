@extends('layouts.main')
@section('title', $event->title)
@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row" style="border: 1px solid red">
            <div id="image-container" class="col-md-6">
                @if ($event->image)
                    <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
                @else
                    <img src="/img/event_placeholder.jpg" class="img-fluid" alt="{{ $event->title }}">
                @endif
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city">
                    <ion-icon name="location-outline"></ion-icon>
                    {{ $event->city }}
                </p>
                <p class="events-participants">
                    <ion-icon name="people-outline"></ion-icon>
                    X Participantes
                </p>
                <p class="event-owner">
                    <ion-icon name="star-outline"></ion-icon>
                    Dono do Evento
                </p>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                    @foreach ($event->items as $item)
                        <li>
                            <ion-icon name="play-outline"></ion-icon>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div id="description-container" class="col-md-12">
                <h3>Sobre o evento:</h3>
                <p class="event-description">
                    {{ $event->description }}
                </p>
            </div>
        </div>
    </div>
@endsection
