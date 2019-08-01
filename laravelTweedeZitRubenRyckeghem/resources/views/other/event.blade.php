@extends('layouts.master')

@section('content')

    <div class="container">
        @foreach($events as $event)
        <div class="card" style="margin-bottom: 1em; border: 0;">
            <img src="{{$event->afbeelding}}" class="card-img-top" alt="overwatchToernooi">
            <div class="card-body">
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-text"> {{$event->content}}</p>
                @if($event->spreker == null)
                    <p>Spreker: geen </p>
                @else
                <p class="card-text">Spreker: {{$event->spreker}} </p>
                @endif
                @foreach($event->tags as $tag)

                    <p>
                        Categorie:
                        <b>
                            {{$tag->name}}
                        </b>
                    </p>

                @endforeach
                <footer class="blockquote-footer">{{$event->datumTijd}}</footer>
                <br>
                @if(Auth::check())
                    @if($deelnemer->contains($event['id']))
                        <p><b>Ingeschreven</b></p>
                        <a href="{{route('uitschrijvenEventDeelnemer',['id' => $deelnemers])}}" class="btn btn-outline-danger">Uitschrijven</a>
                        <hr>
                    @elseif(count($event->deelnemers) == $event->maxAantalDeelnemers)
                        <p>Volzet!</p>
                    @else

                <a href="{{route('inschrijvenEventDeelnemer',['id' => $event['id']])}}" class="btn btn-outline-dark">inschrijven</a>
                <hr>
                    @endif
                @else
                    <p>Om je te kunnen inschrijven moet je inloggen</p>
                @endif


                <p>{{count($event->deelnemers)}}/{{$event->maxAantalDeelnemers}} deelnemers</p>
            </div>
        </div>
            @endforeach
    </div>


    @endsection
