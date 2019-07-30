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
                <a href="#" class="btn btn-outline-dark">inschrijven</a>
            </div>
        </div>
            @endforeach
    </div>


    @endsection
