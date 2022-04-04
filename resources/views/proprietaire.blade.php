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
                @foreach ($proprietes as $propriete)
                    @if ($propriete->proprietaire_id == $proprietaire->id)
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Liste des propriétés</p>
                            <a class="button is-info" href="{{ route('proprietes.create') }}">Ajouter une propriété</a>
                        </header>
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
                                        @foreach($proprietes as $propriete)
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
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
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

    h1{
        text-align: center;
        font-weight: bold;
    }
    img{
        width: 100px
    }

    .is-info {
            margin: 0.3em;
        }
</style>