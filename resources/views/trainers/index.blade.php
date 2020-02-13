@extends('layouts.app')

@section('title', 'Trainers')

@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
    @foreach($trainers as $trainer)
       <!-- <p>Listado de trainers</p> -->
        <div class="col-sm">
        <!--<p>{{$trainer->name}}</p> -->
        <div class="card text-center" style="width: 18rem; margin-top: 70px;">
         <!--<img class="card-img-top" src="..." alt="Card image cap"> -->
        <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" class="card-img-top
        rounded-circle mx-auto d-block" src="images/{{$trainer->avatar}}" alt="">
        <div class="card-body">
        <h5 class="card-title">{{$trainer->name}}</h5>
     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver más...</a>
         </div>
        </div>
    </div>
    @endforeach
</div>

@endsection