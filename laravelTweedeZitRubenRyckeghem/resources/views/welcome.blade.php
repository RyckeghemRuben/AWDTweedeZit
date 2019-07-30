@extends('layouts.master')

@section('content')

    <div class="container">
        @foreach($items as $item)
        <div class="jumbotron">
            <h1 class="display-4">Zoekertje {{$item['id']}}</h1>
            <p class="lead">{{$item['title']}}</p>
            <hr class="my-4">
                @foreach($item->tags as $tag)

                    <p>
                        Categorie:
                        <b>
                            {{$tag->name}}
                        </b>
                    </p>

                    @endforeach

            <p>{{$item['content']}}</p>
            <a class="btn btn-primary btn-lg" href="{{route('item',['id'=>$item['id']])}}" role="button">Details</a>
        </div>
        @endforeach
            {{$items->links()}}
    </div>

    @endsection