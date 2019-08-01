@extends('layouts.master')

@section('content')

    <div class="container">
        @foreach($events as $event)
        <div class="card" style="margin-bottom: 1em">
            <img src="{{$event->afbeelding}}" class="card-img-top" alt="overwatchToernooi">
            <div class="card-body">
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-text">{{$event->content}}</p>
                <footer class="blockquote-footer">{{$event->datumTijd}}</footer>
                <br>
                @if(Auth::check())

                    @if($deelnemer->contains($event['id']))
                        <p>al ingeschreven</p>
                    @else

                <a href="{{route('inschrijvenEventDeelnemer',['id' => $event['id']])}}" class="btn btn-outline-dark">inschrijven</a>
                <hr>
                    @endif
                @else
                    <p>Om je te kunnen inschrijven moet je inloggen</p>
                @endif

                <p>{{count($event->deelnemers)}}/10 deelnemers</p>
            </div>
        </div>
            @endforeach
    </div>


    @endsection
