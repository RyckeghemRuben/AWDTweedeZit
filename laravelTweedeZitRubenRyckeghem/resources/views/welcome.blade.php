@extends('layouts.master')

@section('content')
<div class="container" style="margin-bottom: 1em">
    <div class="row">
        <div class="col-lg-12" style="padding:0 25%">
            <img style="max-width: 100%;" src="/images/ehackb.jpg">
        </div>
        <div class="col-lg-12" style="color: white; text-align: center">
            <h2>EhackB 2020</h2><br>
            <p>Ook in 2020 is er een nieuw EhackB-evenement gepland! Op deze site zal men de details krijgen over
            het volgende evenement. We kunnen alvast vermelden dat de volgende editie weer op en top zal zijn, want er zal
            sowieso een laravel workshop plaatsvinden. Deze zal worden gegeven door niemand minder dan Mike Derycke!</p>
            <hr style="border-color: #f39200">

            Aantal inschrijvingen voor EhackB-2020: {{count($users)}}
        </div>
    </div>
</div>
    <div class="container">
        @foreach($items as $item)
        <div class="jumbotron" style="background-color: white">
            <h3 class="display-4" style="color: #e51c28;">{{$item['title']}}</h3>
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

            <a class="btn btn-danger
             btn-lg" href="{{route('item',['id'=>$item['id']])}}" role="button">Details</a>
        </div>
        @endforeach
            {{$items->links()}}
    </div>

    @endsection