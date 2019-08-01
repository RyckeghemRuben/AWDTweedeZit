@extends('layouts.master')
@section('content')
    <div class="container">

        <div class="row">
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <h3>Gegevens:</h3>
                </div>
                <div class="card-body">
                    <h5>Username: {{$user->name}}</h5>
                    <h5>Username: {{$user->email}}</h5>
                </div>
            </div>
        </div><br>
        <div class=row>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Change username & password
            </button>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                @include('partials.error')
                <form method="post" action="{{route('profileUpdate')}}">
                    <div class="form-group">
                        <label for = "name">Naam</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="">
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-outline-info">Submit</button>
                </form>
            </div>
        </div>

    </div>

    @endsection