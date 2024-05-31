<?php

namespace App\Http\Controllers;
use App\Models\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activites = Activite::all();
        return view('activites.index', compact('activites'));
    }

    public function create()
    {
        return view('activites.create');
    }

    public function store(Request $request)
    {
        $activite = new Activite();
        $activite->description = $request->description;
        $activite->dateDebut = $request->dateDebut;
        $activite->nombreJours = $request->nombreJours;
        $activite->save();
        return redirect()->route('activites.index');
    }

    public function show($id)
    {
        $activite = Activite::find($id);
        return view('activites.show', compact('activite'));
    }

    public function edit($id)
    {
        $activite = Activite::find($id);
        return view('activites.edit', compact('activite'));
    }

    public function update(Request $request, $id)
    {
        $activite = Activite::find($id);
        $activite->description = $request->description;
        $activite->dateDebut = $request->dateDebut;
        $activite->nombreJours = $request->nombreJours;
        $activite->save();
        return redirect()->route('activites.index');
    }

    public function destroy($id)
    {
        $activite = Activite::find($id);
        $activite->delete();
        return redirect()->route('activites.index');
    }
}
