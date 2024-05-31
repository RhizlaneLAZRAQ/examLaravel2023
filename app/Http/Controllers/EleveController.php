<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
use App\Models\Club;
class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view('eleves.index', compact('eleves'));
    }

    public function create()
    {
        $clubs = Club::all();
        return view('eleves.create', compact('clubs'));
    }

    public function store(Request $request)
    {
        $eleve = new Eleve();
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->club_id = $request->club_id;
        $eleve->save();
        return redirect()->route('eleves.index');
    }

    public function show($id)
    {
        $eleve = Eleve::with('activites')->find($id);
        return view('eleves.show', compact('eleve'));
    }

    public function edit($id)
    {
        $eleve = Eleve::find($id);
        $clubs = Club::all();
        return view('eleves.edit', compact('eleve', 'clubs'));
    }

    public function update(Request $request, $id)
    {
        $eleve = Eleve::find($id);
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->club_id = $request->club_id;
        $eleve->save();
        return redirect()->route('eleves.index');
    }

    public function destroy($id)
    {
        $eleve = Eleve::find($id);
        $eleve->delete();
        return redirect()->route('eleves.index');
    }
}
