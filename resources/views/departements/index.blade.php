@extends('template')
@section('content')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Les départements</p>
            <a class="button is-info" href="{{ route('departements.create') }}">Ajouter un département</a>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>libelle</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departements as $departement)
                            <tr>
                                <td>{{ $departement->id }}</td>
                                <td><strong>{{ $departement->nom }}</strong></td>
                                <td><a class="button is-warning" href="{{ route('departements.edit', $departement->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('departements.destroy', $departement->id) }}" method="post">
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
            {{ $departements->links() }}
        </footer>
    </div>
@endsection

<style>
    img{
        width: 100px;
        height: 50px;
    }
    .is-info {
            margin: 0.3em;
    }
</style>