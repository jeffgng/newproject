@extends('layout.content')
@section('content')

<div>
    @include('partials._nav')
</div>
@csrf
<div>
    <div class="aligner">
        <div class="col s10 m4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('produits/infirmiere3.png')}}">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="aligner">
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">ceci est un lien</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
  <div>
       @include('partials._footer')
    </div>
</div>
@stop
