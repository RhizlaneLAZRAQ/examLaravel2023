
@extends('layouts.app')

@section('title', 'Ajouter une activité')

@section('content')
    <h1>Ajouter une activité</h1>
    <form action="{{ route('activites.store') }}" method="POST">
        @csrf
        <label for="description">Description:</label>
        <input type="text" id="description" name="description">
        <label for="dateDebut">Date début:</label>
        <input type="date" id="dateDebut" name="dateDebut">
        <label for="nombreJours">Nombre de jours:</label>
        <input type="number" id="nombreJours" name="nombreJours">
        <button type="submit">Ajouter</button>
        <a href="{{ route('activites.index') }}">Annuler</a>
    </form>
@endsection
