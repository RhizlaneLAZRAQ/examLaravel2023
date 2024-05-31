
@extends('layouts.app')

@section('title', 'Détails de l\'élève')

@section('content')
    <h1>Gestion des élèves</h1>
    <p>ID Élève: {{ $eleve->id }}</p>
    <p>Nom: {{ $eleve->nom }}</p>
    <p>Prénom: {{ $eleve->prenom }}</p>
    <p>ID Club: {{ $eleve->club->id }} - {{ $eleve->club->nom }}</p>
    <h2>Liste d'activités auxquelles l'élève a participé</h2>
    <ul>
        @foreach($eleve->activites as $activite)
            <li>ID activité: {{ $activite->id }}, Description: {{ $activite->description }}, Date début: {{ $activite->dateDebut }}, Nombre de jours: {{ $activite->nombreJours }}</li>
        @endforeach
    </ul>
    <p>Nombre total des jours: {{ $eleve->activites->sum('nombreJours') }}</p>
@endsection
