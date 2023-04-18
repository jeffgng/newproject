@extends('layout.content')
@section('content')

@foreach($messages as $message)

    <p> {{$message->name}} </p>
    <p> {{$message->email}} </p>
    <textarea name="message" id="message" cols="30" rows="10">
        {{$message->message}}
    </textarea>
    <a href="edit/{{$message->id}}">edit</a>
    <a href="delete/{{$message->id}}">supprimer</a>

@endforeach


@stop
