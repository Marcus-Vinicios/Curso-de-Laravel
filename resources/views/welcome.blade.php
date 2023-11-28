@extends('layouts.main')
@section('title', 'Mark-Events')
@section('content')
    <div style="display: flex; flex-direction: column;">
        @foreach ($events as $event)
            <div style="border-bottom: 1px solid #222; paddin: 10px;">
                <h3>{{ $event->title }}</h3>
                <p>
                    {{ $event->description }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
