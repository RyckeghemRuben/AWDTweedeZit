@extends('layouts.admin')

@section('content')
    <div class="container">
        @include('partials.error')
        <form method="post" action="{{route('eventUpdate')}}">
            <div class="form-group">
                <label for = "title">Titel</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$event->title}}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" id="content" name="content" value="{{$event->content}}">
            </div>
            <div class="form-group">
                <label for="plaats">plaats</label>
                <input type="text" class="form-control" id="plaats" name="plaats" value="{{$event->plaats}}">
            </div>
            <div class="form-group">
                <label for="datumTijd">datum & tijd</label>
                <input type="text" class="form-control" id="datumTijd" name="datumTijd" value="{{$event->datumTijd}}">
            </div>
            <div class="form-group">
                <label for="afbeelding">Afbeelding(link)</label>
                <input type="text" class="form-control" id="afbeelding" name="afbeelding" value="{{$event->afbeelding}}">
            </div>
            <div class="form-group">
                <label for="spreker">Spreker</label>
                <input type="text" class="form-control" id="spreker" name="spreker" value="{{$event->spreker}}">
            </div>
            <div class="form-group">
                <label for="maxAantalDeelnemers">max aantal deelnemers</label>
                <input type="text" class="form-control" id="maxAantalDeelnemers" name="maxAantalDeelnemers" value="{{$event->maxAantalDeelnemers}}">
            </div>

            @foreach($tags as $tag)

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="tags[]"
                               value="{{$tag->id}}"
                                {{$event->tags->contains($tag->id) ? 'checked' : ''}}>
                        {{$tag->name}}

                    </label>
                </div>

            @endforeach

            <input type="hidden" name="id" value="{{$event->id}}">
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection