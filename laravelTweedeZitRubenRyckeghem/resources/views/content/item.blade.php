@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Item page</h2>
        </div>
            <hr>
        <div class="row">

            <h3 style="width: 100%">{{$nieuweVar['titel']}}</h3>
            <br><br>
            <h4 style="float: left">Staat:{{$nieuweVar['staat']}}</h4>
        </div>
    </div>
@endsection