
@extends('layouts.app')

@section('title', 'Détails du club')

@section('content')
    <h1>Gestion des clubs</h1>
    <p>ID Club: {{ $club->id }}</p>
    <p>Nom: {{ $club->nom }}</p>
    <h2>Liste des élèves dans ce club</h2>
    <ul>
        @foreach($club->eleves as $eleve)
            <li>ID élève: {{ $eleve->id }}, Nom: {{ $eleve->nom }}, Prénom: {{ $eleve->prenom }}</li>
        @endforeach
    </ul>
@endsection
