
@extends('layouts.app')

@section('title', 'Liste des élèves')

@section('content')
    <h1>Liste des élèves</h1>
    <a href="{{ route('eleves.create') }}"  <a href="{{ route('clubs.create') }}" class="button">Ajouter un élève</a>
    <table>
        <thead>
            <tr>
                <th>ID élève</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>ID club</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eleves as $eleve)
                <tr>
                    <td>{{ $eleve->id }}</td>
                    <td>{{ $eleve->nom }}</td>
                    <td>{{ $eleve->prenom }}</td>
                    <td>{{ $eleve->club_id }}</td>
                    <td>
                        <a href="{{ route('eleves.edit', $eleve->id) }}" class="button">Modifier</a>
                        <form action="{{ route('eleves.destroy', $eleve->id) }}" method="POST" style="display:inline;">
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
