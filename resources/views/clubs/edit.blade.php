
@extends('layouts.app')

@section('title', 'Modifier un club')

@section('content')
    <h1>Modifier un club</h1>
    <form action="{{ route('clubs.update', $club->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="{{ $club->nom }}">
        <button type="submit">Modifier</button>
        <a href="{{ route('clubs.index') }}">Annuler</a>
    </form>
@endsection
