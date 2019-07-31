@extends('layouts.master')

@section('content')

    <div class="container">
        @foreach($events as $event)
        <div class="card">
            <img src="{{$event->afbeelding}}" class="card-img-top" alt="overwatchToernooi">
            <div class="card-body">
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-text">{{$event->content}}</p>
                <footer class="blockquote-footer">{{$event->datumTijd}}</footer>
                <br>

                @if(Auth::check() && !$deelnemer)
                <a href="{{route('inschrijvenEventDeelnemer',['id' => $event['id']])}}" class="btn btn-outline-dark">inschrijven</a>
                <hr>
                    @endif
                <p>{{count($event->deelnemers)}}/10 deelnemers</p>
            </div>
        </div>
            @endforeach

    </div>


    @endsection
