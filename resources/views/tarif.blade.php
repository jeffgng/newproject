@extends('layout.content')
@section('content')
<div>
    @include('partials._nav')
</div>


<div class="aligner">
    <div class="col s10 m4">
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('produits/infirmiere3.png')}}">
                <span class="card-title">Card Title</span>
            </div>
            <div class="aligner">
                <p>COMPTE STANDARD</p>
                <p>
                A partir de 12500F/mois

                Cotisation mensuelle
                Vous benéficierai

                D'une prise en charge à 80% pour consultation; prescription; imagerie</p>
            </div>
            <div class="card-action">
                <a href="#">Souscrire a ce plan</a>
            </div>
        </div>
    </div>
</div>




<div class="aligner">
    <div class="col s10 m4">
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('produits/infirmiere3.png')}}">
                <span class="card-title">projet</span>
            </div>
            <div class="aligner">
                <p>Compte VIP</p>
                <p>

                - - - -

                Cotisation mensuelle
                Vous benéficierai

                D'une prise à charge à 80%
                Couvre 5membres de votre famille (père; mère +3 enfants)
                Avec évacuation sanitaire vers l'international et une prise en charge personnalisée
            </p>
            </div>
            <div class="card-action">
                <a href="#">Souscrire a ce plan</a>
            </div>
        </div>
    </div>
</div>


<div>
    @include('partials._footer')
</div>
@stop
