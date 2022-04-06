@extends('template')
@section('content')

    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Liste des propriétaires</p>
            <div class="field has-addons">
                <div class="control">
                  <input class="input" type="text" placeholder="Find a repository">
                </div>
                <div class="control">
                  <a class="button is-info">
                    Search
                  </a>
                </div>
              </div>
            <a class="button is-info" href="{{ route('proprietaires.create') }}">Ajouter une propriété</a>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Prénom et nom</th>
                            <th>Photo</th>
                            <th>Adresse</th>
                            <th>Téléphone</th>
                            <th>adresse email</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($proprietaires as $proprietaire)
                            <tr>
                                <td>{{ $proprietaire->id }}</td>
                                <td><strong>{{ $proprietaire->prenom }} {{ $proprietaire->nom }}</strong></td>
                                <td>
                                    <img src="{{ $proprietaire->photo }}" alt="">
                                </td>
                                <td><strong>{{ $proprietaire->adresse }}</strong></td>
                                <td><strong>{{ $proprietaire->telephone }} </strong></td>
                                <td><strong>{{ $proprietaire->email }} </strong></td>
                                <td><a class="button is-primary" href="{{ route('proprietaires.show', $proprietaire->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('proprietaires.edit', $proprietaire->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('proprietaires.destroy', $proprietaire->id) }}" method="post">
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
        <footer class="card-footer">
            {{ $proprietaires->links() }}
        </footer>
    </div>
@endsection

<style>
    img{
        width: 100px;
        height: 50px;
    }
    .is-info, .input {
            margin: 0.3em;
    }
</style>