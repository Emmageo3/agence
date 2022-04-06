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
                    
                        <div class="card">
                            <div class="card-content">
                                <div class="content">
                                    <table class="table is-hoverable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Numéro</th>
                                                <th>Photo</th>
                                                <th>Adresse</th>
                                                <th>Prix location</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach ($proprietaires as $proprietaire)

                                                @if ($propriete->proprietaire_id == $proprietaire->id)

                                                <tr>
                                                    <td>{{ $propriete->id }}</td>
                                                    <td><strong>{{ $propriete->numero }}</strong></td>
                                                    <td>
                                                        <img src="{{ $propriete->photo }}" alt="">
                                                    </td>
                                                    <td><strong>{{ $propriete->quartier->nom }} , {{ $propriete->adresse }}</strong></td>
                                                    <td><strong>{{ $propriete->loyer }} Fcfa</strong></td>
                                                    <td><a class="button is-primary" href="{{ route('proprietes.show', $propriete->id) }}">Voir</a></td>
                                                    <td><a class="button is-warning" href="{{ route('proprietes.edit', $propriete->id) }}">Modifier</a></td>
                                                    <td>
                                                        <form action="{{ route('proprietes.destroy', $propriete->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="button is-danger" type="submit">Supprimer</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                    
                                                @endif
                                                
                                            @endforeach
                                            
                                                
                                                
                                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                   
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

    .proprietaire img{
        width: 20rem;
    }

    .proprietaire a{
        color: #000
    }

    .image img{
        width: 10rem;
    }
</style>