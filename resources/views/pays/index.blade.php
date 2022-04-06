@extends('template')
@section('content')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Les pays</p>
            <a class="button is-info" href="{{ route('pays.create') }}">Ajouter un pays</a>
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
                        @foreach($pays as $etat)
                            <tr>
                                <td>{{ $etat->id }}</td>
                                <td><strong>{{ $etat->nom }}</strong></td>
                                <td><a class="button is-warning" href="{{ route('pays.edit', $etat->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('pays.destroy', $etat->id) }}" method="post">
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
            {{ $pays->links() }}
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