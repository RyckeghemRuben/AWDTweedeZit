@extends('layouts.master')

@section('content')
    <script>

    </script>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>{{$item->title}}</h3>
            </div>
            <div class="card-body">
                <p class="card-text">{{$item->content}}</p>
                <p class="card-text">  {{count($item->likes)}} likes
                    @if(Auth::check())
                        <a class="btn btn-outline-primary btn-sm"
                           href="{{route('itemlike',['id' => $item['id']])}}">Like</a>
                    @endif</p>
            </div>
        </div>

    </div>
@endsection