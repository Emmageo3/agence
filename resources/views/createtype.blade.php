@extends('template')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'un type de propriété</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('typeproprietes.store') }}" method="POST">
                    @csrf
                    
                    <div class="field">
                        <label class="label">libelle</label>
                        <div class="control">
                          <input class="input @error('libelle') is-danger @enderror" type="text" name="libelle" value="{{ old('libelle') }}" placeholder="libelle">
                        </div>
                        @error('libelle')
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