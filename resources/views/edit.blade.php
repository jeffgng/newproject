
@extends('layout.content')
@section('content')


<form method="post" action="{{ url('update/'.$message->id)}}">
    @csrf
    <div class="form-group">

        <label for="name">name :</label>
        <input type="text" name="name" value="{{ $message->name}}" />

        <label for="email">email :</label>
        <input type="email"  name="email" value="{{ $message->email}}" />

        <textarea name="message" id="message" cols="30" rows="10" value="{{ $message->message}}"> </textarea>
    </div>
    <button type="submit" class="btn btn-primary" value="update">Modifier</button>
</form>
@stop
