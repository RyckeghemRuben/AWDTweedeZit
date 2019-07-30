@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Item page</h2>
        </div>
            <hr>
        <div class="row">

            <h3 style="width: 100%">{{$item->title}}</h3>
            <br><br>
            <h4 style="float: left">Details:{{$item->content}}</h4>
        </div>
        <hr>
        <p>{{count($item->likes)}} likes
            <a class="btn btn-outline-primary btn-sm"
            href="{{route('itemlike',['id' => $item['id']])}}">Like</a>
        </p>
    </div>
@endsection