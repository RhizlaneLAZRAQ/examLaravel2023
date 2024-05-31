
@extends('layouts.app')

@section('title', 'Liste des clubs')

@section('content')
    <h1>Liste des clubs</h1>
    <a href="{{ route('clubs.create') }}" class="button">Ajouter un club</a>
    <table>
        <thead>
            <tr>
                <th>ID club</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clubs as $club)
                <tr>
                    <td>{{ $club->id }}</td>
                    <td>{{ $club->nom }}</td>
                    <td>
                        <a href="{{ route('clubs.edit', $club->id) }}" class="button">Modifier</a>
                        <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" style="display:inline;">
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
