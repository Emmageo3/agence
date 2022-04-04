@extends('template')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'un propriétaire</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('proprietaires.store') }}" method="POST">
                    @csrf
                    
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                          <input class="input @error('nom') is-danger @enderror" type="text" name="nom" value="{{ old('nom') }}" placeholder="nom">
                        </div>
                        @error('nom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Prénom</label>
                        <div class="control">
                          <input class="input @error('prenom') is-danger @enderror" type="text" name="prenom" value="{{ old('prenom') }}" placeholder="prenom">
                        </div>
                        @error('prenom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Lieu de naissance</label>
                        <div class="control">
                          <input class="input" type="text" name="lieudenaissance" value="{{ old('lieudenaissance') }}"  placeholder="lieu de naissance">
                        </div>
                        @error('lieudenaissance')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Adresse</label>
                        <div class="control">
                          <input class="input" type="text" name="adresse" value="{{ old('adresse') }}"  placeholder="adresse">
                        </div>
                        @error('adresse')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Numéro de téléphone</label>
                        <div class="control">
                          <input class="input" type="text" name="telephone" value="{{ old('telephone') }}"  placeholder="telephone">
                        </div>
                        @error('telephone')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Adresse email</label>
                        <div class="control">
                          <input class="input" type="text" name="email" value="{{ old('email') }}"  placeholder="email">
                        </div>
                        @error('email')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Photo</label>
                        <div class="control">
                          <input class="input" type="text" name="photo" value="{{ old('photo') }}"  placeholder="photo">
                        </div>
                        @error('photo')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Numéro d'identification</label>
                        <div class="control">
                          <input class="input" type="number" name="cni" value="{{ old('cni') }}"  placeholder="CNI">
                        </div>
                        @error('cni')
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