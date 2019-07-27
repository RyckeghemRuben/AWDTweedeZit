@extends('layouts.admin')

@section('content')

 <div class="container">
     <!--controle op sessie data-->
    @if(session('forminput'))
     <div class="alert alert-success" role="alert">
         {{session('forminput')}}
     </div>
    @endif
     <hr>
     <a class="btn btn-primary btn-lg" href="{{route('admin.create')}}" role="button">Create</a>
    <hr>
     @foreach($items as $item)
     <div class="row" style="margin-top: 1em;">
         <h2 class="col-10">Title: {{$item->title}}</h2>
         <a class="col-2 btn btn-info btn-lg" href="{{route('admin.edit',['id'=>$item->id])}}" role="button">Edit</a>
     </div>
    @endforeach
 </div>

@endsection