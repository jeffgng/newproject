@extends('layout.content')
@section('content')

<div>
    @include('partials._nav')
    <h1>Notre centre medical</h1>
    <p>
        L’assurance maladie est un contrat qui protège l’assuré des conséquences de problème de santé par le remboursement de
    frais s’y rapportant ou par l’octroi de services spécifiques.
    
    En effet la mutuelle vise à contribuer au bien-être des membres des secteurs informels et libéraux ainsi que de leur
    famille dans le domaine de la santé. Elle a pour mission également de vulgariser l’assurance maladie et surtout de
    contribuer à la rendre plus effective pour la population burkinabé.
    
    Nous sommes en partenariat avec plus d’une centaine (100) de cliniques et de pharmacies sur toute l’étendue du
    territoire avec une présence effective à Ouagadougou et très prochainement à Bobo-Dioulasso et Koupela.
    Nos prestations prennent en charge le remboursement de vos ordonnances jusqu’à l’évacuation sanitaire en passant par les
    garanties d’hospitalisation et de Maternité.
</p>
   
</div>

<table> 
    @foreach ($tab as $choix )
        <td>{{$choix}}</td>
    @endforeach
    
</table>

<div>
    @include('partials._footer')
</div>
@stop