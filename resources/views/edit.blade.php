@extends('template')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'une propriété</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('proprietes.update', $propriete->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label">Numero</label>
                        <div class="control">
                          <input class="input @error('numero') is-danger @enderror" type="text" name="numero" value="{{ old('numero', $propriete->numero) }}" placeholder="Numero de la  propriete">
                        </div>
                        @error('numero')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Sélectionnez le type de propriété</label>
                        <div class="select">
                            <select name="typepropriete_id">
                                @foreach($typeproprietes as $typepropriete)
                                    <option value="{{ $typepropriete->id }}">{{ $typepropriete->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Sélectionnez le quartier</label>
                        <div class="select">
                            <select name="quartier_id">
                                @foreach($quartiers as $quartier)
                                    <option value="{{ $quartier->id }}">{{ $quartier->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Photo de la propriété</label>
                        <div class="control">
                          <input class="input @error('photo') is-danger @enderror" type="text" name="photo" value="{{ old('photo', $propriete->photo) }}" placeholder="Photo de la propriété">
                        </div>
                        @error('photo')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Adresse de la propriété</label>
                        <div class="control">
                          <input class="input @error('adresse') is-danger @enderror" type="text" name="adresse" value="{{ old('adresse') }}" placeholder="Adresse de la propriété">
                        </div>
                        @error('adresse')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Prix de location</label>
                        <div class="control">
                          <input class="input" type="number" name="loyer" value="{{ old('loyer') }}">
                        </div>
                        @error('loyer')
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