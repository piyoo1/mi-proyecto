@extends('layouts.app')

@section('title', 'Trainer')

@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" class="card-img-top
    rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt=""> 
    <div class="text-center">

    <h1>{{$trainer->slug}}</h1>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
    Some quick example text to build on the card title and make up the bulk of the card's content.
    Some quick example text to build on the card title and make up the bulk of the card's content.
    Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
    {!! Form::open(['route' =>['trainers.destroy', $trainer->slug], 'method' => 'DELETE']) !!}

    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])!!}

    {!! Form::close()!!}
    </div>
@endsection