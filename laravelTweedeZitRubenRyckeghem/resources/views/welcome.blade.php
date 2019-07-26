@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="jumbotron">
            <h1 class="display-4">Zoekertje 1</h1>
            <p class="lead">Boardgames</p>
            <hr class="my-4">
            <p>Leuke boardgames enzo</p>
            <a class="btn btn-primary btn-lg" href="{{route('item',['id'=>1])}}" role="button">Details</a>
        </div>
        <div class="jumbotron">
            <h1 class="display-4">Zoekertje 2</h1>
            <p class="lead">Gitaar</p>
            <hr class="my-4">
            <p>Mooie gitaar van Gibson</p>
            <a class="btn btn-primary btn-lg" href="{{route('item',['id'=>2])}}" role="button">Details</a>
        </div>
        <div class="jumbotron">
            <h1 class="display-4">Zoekertje 3</h1>
            <p class="lead">Voetbal Nike</p>
            <hr class="my-4">
            <p>Rode voetbal van Nike</p>
            <a class="btn btn-primary btn-lg" href="{{route('item',['id'=>3])}}" role="button">Details</a>
        </div>

    </div>

    @endsection