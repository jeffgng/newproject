
@extends('layout.content')
@section('content')


<form method="post" action="{{ route('liste') }}">
    <div class="form-group">

        <label for="name">name :</label>
        <input type="text" name="name" value="name" />

        <label for="email">email :</label>
        <input type="email"  name="email" value="email" />

        <textarea name="message" id="message" cols="30" rows="10"> </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@stop
