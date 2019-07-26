@extends('layouts.admin')

@section('content')
    <div class="container">
        @include('partials.error')
        <form method="post" action="{{route('itemcreate')}}">
            <div class="form-group">
                <label for = "title">Titel</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" id="content" name="content">
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection