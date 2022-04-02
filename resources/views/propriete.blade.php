@extends('template')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">propriété : {{ $propriete->typepropriete->libelle }} {{ $propriete->numero }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <img src="{{ $propriete->photo }}" alt="" width="100%">
                <h1>{{ $propriete->loyer }} Fcfa</h1>
                <p>{{ $propriete->quartier->nom }}, {{ $propriete->adresse }}</p>
                <hr>
                <div class="proprietaire">
                    <h1>Informations sur le propriétaire</h1>
                    <img src="{{ $propriete->proprietaire->photo }}" alt="">
                    <p>nom du propriétaire : <span>{{ $propriete->proprietaire->prenom }} {{ $propriete->proprietaire->nom }}</span></p>
                    <p>numéro de téléphone : <span>{{ $propriete->proprietaire->telephone }}</span></p>
                    <p>adresse email : <span>{{ $propriete->proprietaire->email }}</span></p>
                    <hr>
                    <h1><a href="#">Voir plus de propriétés de {{ $propriete->proprietaire->prenom }}</a></h1>
                </div>
               
            </div>
        </div>
    </div>
@endsection

<style>
    .proprietaire{
        text-align: center
    }

    .proprietaire h1{
        text-decoration: underline;
    }

    .proprietaire span{
        font-weight: bold;
    }

    .proprietaire a{
        color: #000
    }
</style>