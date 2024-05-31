
@extends('layouts.app')

@section('title', 'Ajouter un élève')

@section('content')
    <h1>Ajouter un élève</h1>
    <form action="{{ route('eleves.store') }}" method="POST">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom">
        <label for="club_id">ID club:</label>
        <select id="club_id" name="club_id">
            @foreach($clubs as $club)
                <option value="{{ $club->id }}">{{ $club->id }} - {{ $club->nom }}</option>
            @endforeach
        </select>
        <button type="submit">Ajouter</button>
        <a href="{{ route('eleves.index') }}">Annuler</a>
    </form>
@endsection
