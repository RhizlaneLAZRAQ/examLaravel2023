
@extends('layouts.app')

@section('title', 'Modifier une activité')

@section('content')
    <h1>Modifier une activité</h1>
    <form action="{{ route('activites.update', $activite->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" value="{{ $activite->description }}">
        <label for="dateDebut">Date début:</label>
        <input type="date" id="dateDebut" name="dateDebut" value="{{ $activite->dateDebut }}">
        <label for="nombreJours">Nombre de jours:</label>
        <input type="number" id="nombreJours" name="nombreJours" value="{{ $activite->nombreJours }}">
        <button type="submit">Modifier</button>
        <a href="{{ route('activites.index') }}">Annuler</a>
    </form>
@endsection
