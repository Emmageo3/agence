@extends('template')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">{{ $proprietaire->prenom }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <div class="image">
                    <img src="{{ $proprietaire->photo }}" alt="" width="30%">
                </div>
                <div class="text">
                    <h1>{{ $proprietaire->prenom }} <span>{{ $proprietaire->nom }}</h1>
                    <p>nationalité : <span>{{ $proprietaire->nationalite }}</span></p>
                    <p>adresse : <span>{{ $proprietaire->adresse }}</span></p>
                    <p>Numero de téléphone : <span>{{ $proprietaire->telephone }}</span></p>
                    <p>adresse email : <span>{{ $proprietaire->email }}</span></p>
                    <p>CNI : <span>{{ $proprietaire->cni }}</span></p>
                </div>
            </div>
            <div class="proprietes">
                <h1>Voir les propriétés de {{ $proprietaire->prenom }}</h1>
                {{ $propriete->numero }}
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

    .content span{
        font-weight: bold;
    }

    .proprietaire a{
        color: #000
    }

    .content{
        display: flex
    }

    .content .text{
        margin-left: 2rem;
    }
</style>