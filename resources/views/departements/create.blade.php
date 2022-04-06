@extends('template')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'un département</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('departements.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">Sélectionnez la région</label>
                        <div class="select">
                            <select name="region_id">
                                @foreach($regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Nom du département</label>
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