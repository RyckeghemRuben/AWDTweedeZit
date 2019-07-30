@extends('layouts.master')

@section('content')

    <div class="container">
        @foreach($items as $item)
        <div class="jumbotron">
            <h3 class="display-4">{{$item['title']}}</h3>
            <p class="lead">Geplaatst op:{{$item['created_at']}}</p>
            <hr class="my-4">
                @foreach($item->tags as $tag)

                    <p>
                        Categorie:
                        <b>
                            {{$tag->name}}
                        </b>
                    </p>

                    @endforeach
            <a class="btn btn-primary btn-lg" href="{{route('item',['id'=>$item['id']])}}" role="button">Details</a>
        </div>
        @endforeach
            {{$items->links()}}
    </div>

    @endsection