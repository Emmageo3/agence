@extends('template')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'un département</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('communes.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">Sélectionnez le département</label>
                        <div class="select">
                            <select name="departement_id">
                                @foreach($departements as $departement)
                                    <option value="{{ $departement->id }}">{{ $departement->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Nom de la commune</label>
                        <div class="control">
                          <input class="input" type="text" name="commune" value="{{ old('commune') }}">
                        </div>
                        @error('commune')
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