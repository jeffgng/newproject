
@extends('layout.content')
@section('content')


        @include('partials._nav')
        <section>
            <h2 >Presentation du travail a faire</h2>
        <div id="aligcard">
           <div class="col s12 m4">
             <div class="card">
             <div class="card-image">
                <img src="{{ asset('produits/lt1.png')}}">
                <span class="card-title"></span>
             </div>
             <div class="aligner">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
             </div>
             <div class="card-action">
                <a href="#">Continuer</a>
             </div>
           </div>
           </div>

           <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('produits/medecin1.png')}}">
                    <span class="card-title"></span>
                </div>
                <div class="aligner">
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">Continuer</a>
                </div>
            </div>
        </div>


        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('produits/doct.png')}}">
                    <span class="card-title"></span>
                </div>
                <div class="aligner">
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">Continuer</a>
                </div>
            </div>
        </div>
        </section>
        </div>
        
        <div>
            @include('partials._footer')
        </div>
        @stop

