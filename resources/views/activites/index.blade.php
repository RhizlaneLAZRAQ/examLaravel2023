
@extends('layouts.app')

@section('title', 'Liste des activités')

@section('content')
    <h1>Liste des activités</h1>
    <a href="{{ route('activites.create') }}" class="button">Ajouter une activité</a>
    <table>
        <thead>
            <tr>
                <th>ID activité</th>
                <th>Description</th>
                <th>Date début</th>
                <th>Nombre de jours</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activites as $activite)
                <tr>
                    <td>{{ $activite->id }}</td>
                    <td>{{ $activite->description }}</td>
                    <td>{{ $activite->dateDebut }}</td>
                    <td>{{ $activite->nombreJours }}</td>
                    <td>
                        <a href="{{ route('activites.edit', $activite->id) }}" class="button">Modifier</a>
                        <form action="{{ route('activites.destroy', $activite->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection
