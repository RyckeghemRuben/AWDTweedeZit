@extends('layouts.admin')

@section('content')
    <div class="container">
        @include('partials.error')
        <form method="post" action="{{route('itemupdate')}}">
            <div class="form-group">
                <label for = "title">Titel</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$item->title}}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" id="content" name="content" value="{{$item->content}}">
            </div>
            @foreach($tags as $tag)

                <div class="checkbox">
                    <label>
                         <input type="checkbox" name="tags[]"
                                value="{{$tag->id}}"
                        {{$item->tags->contains($tag->id) ? 'checked' : ''}}>
                        {{$tag->name}}

                    </label>
                </div>

                @endforeach
            <input type="hidden" name="id" value="{{$item->id}}">
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection