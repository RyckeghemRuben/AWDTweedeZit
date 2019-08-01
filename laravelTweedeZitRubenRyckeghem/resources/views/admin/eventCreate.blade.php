@extends('layouts.admin')

@section('content')
    <div class="container">
        @include('partials.error')
        <form method="post" action="{{route('eventCreate')}}">
            <div class="form-group">
                <label for = "title">Titel</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" id="content" name="content">
            </div>
            <div class="form-group">
                <label for="content">plaats</label>
                <input type="text" class="form-control" id="plaats" name="plaats">
            </div>
            <div class="form-group">
                <label for="content">datum & tijd</label>
                <input type="text" class="form-control" id="datumTijd" name="datumTijd">
            </div>
            <div class="form-group">
                <label for="content">Afbeelding(link)</label>
                <input type="text" class="form-control" id="afbeelding" name="afbeelding">
            </div>
            <div class="form-group">
                <label for="content">Spreker</label>
                <input type="text" class="form-control" id="spreker" name="spreker">
            </div>
            <div class="form-group">
                <label for="content">max aantal deelnemers</label>
                <input type="text" class="form-control" id="maxAantalDeelnemers" name="maxAantalDeelnemers">
            </div>

            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection