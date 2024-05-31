
@extends('layouts.app')

@section('title', 'Détails de l\'activité')

@section('content')
    <h1>Détails de l'activité</h1>
    <p>ID Activité: {{ $activite->id }}</p>
    <p>Description: {{ $activite->description }}</p>
    <p>Date début: {{ $activite->dateDebut }}</p>
    <p>Nombre de jours: {{ $activite->nombreJours }}</p>
    <h2>Liste des élèves ayant participé</h2>
    <ul>
        @foreach($activite->eleves as $eleve)
            <li>ID élève: {{ $eleve->id }}, Nom: {{ $eleve->nom }}, Prénom: {{ $eleve->prenom }}</li>
        @endforeach
    </ul>
@endsection
