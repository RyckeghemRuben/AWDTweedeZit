@extends('layouts.admin')

@section('content')

 <div class="container">
     <!--controle op sessie data-->
    @if(session('forminput'))
     <div class="alert alert-success" role="alert">
         {{session('forminput')}}
     </div>
    @endif
     <div class="jumbotron">
         <h1 class="display-4">Zoekertje 4</h1>
         <p class="lead">Elektrische fiets</p>
         <hr class="my-4">
         <p>Gaat tot 70km/u</p>
         <a class="btn btn-primary btn-lg" href="{{route('admin.create')}}" role="button">Create</a>
         <a class="btn btn-info btn-lg" href="{{route('admin.edit')}}" role="button">Edit</a>
     </div>
 </div>

@endsection