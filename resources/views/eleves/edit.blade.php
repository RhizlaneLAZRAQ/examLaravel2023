
@extends('layouts.app')

@section('title', 'Modifier un élève')

@section('content')
    <h1>Modifier un élève</h1>
    <form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="id">ID élève:</label>
        <input type="text" id="id" name="id" value="{{ $eleve->id }}" readonly>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="{{ $eleve->nom }}">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" value="{{ $eleve->prenom }}">
        <label for="club_id">ID club:</label>
        <select id="club_id" name="club_id">
            @foreach($clubs as $club)
                <option value="{{ $club->id }}" {{ $eleve->club_id == $club->id ? 'selected' : '' }}>
                    {{ $club->id }} - {{ $club->nom }}
                </option>
            @endforeach
        </select>
        <button type="submit">Modifier</button>
        <a href="{{ route('eleves.index') }}">Annuler</a>
    </form>
@endsection
