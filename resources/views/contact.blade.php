@extends('layout.content')
@section('content')

    @include('partials._nav')

    <div class="container">
    <form  action="" method="POST" action="{{ route('contact')}}  ">
    @csrf
        <div class="formulaire">
        <br>
            <label for="nom">name</label>
            <input type="text" name="name" id="name" required></br>
        <br>
            <label for="email">email</label>
            <input type="email" name="email" id="email" required></br>
        <br>
            <label for="message">message</label>
            <textarea name="message" id="" cols="30" rows="10" required></textarea></br>
        <br>
        <div class="contient">
            <button type="submit" name="envoyer">Envoyer</button>
        </div>
        </div>
    </form>
    </div>
    <div>
        @include('partials._footer')
    </div>
    @stop
