@extends('template')
@section('content')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
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
        <footer class="card-footer">
            {{ $proprietes->links() }}
        </footer>
    </div>
@endsection

<style>
    img{
        width: 100px
    }

    .is-info {
            margin: 0.3em;
        }
</style>