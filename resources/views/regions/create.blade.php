@extends('template')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'une région</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('regions.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">Sélectionnez le pays</label>
                        <div class="select">
                            <select name="pays_id">
                                @foreach($pays as $etat)
                                    <option value="{{ $etat->id }}">{{ $etat->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Nom de la région</label>
                        <div class="control">
                          <input class="input" type="text" name="nom" value="{{ old('nom') }}">
                        </div>
                        @error('nom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <div class="control">
                          <button class="button is-link">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection