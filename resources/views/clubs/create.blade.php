
@extends('layouts.app')

@section('title', 'Ajouter un club')

@section('content')
    <h1>Ajouter un club</h1>
    <form action="{{ route('clubs.store') }}" method="POST">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom">
        <button type="submit">Ajouter</button>
        <a href="{{ route('clubs.index') }}">Annuler</a>
    </form>
@endsection
