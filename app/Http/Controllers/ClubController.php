<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::all();
        return view('clubs.index', compact('clubs'));
    }

    public function create()
    {
        return view('clubs.create');
    }

    public function store(Request $request)
    {
        $club = new Club();
        $club->nom = $request->nom;
        $club->save();
        return redirect()->route('clubs.index');
    }

    public function show($id)
    {
        $club = Club::find($id);
        return view('clubs.show', compact('club'));
    }

    public function edit($id)
    {
        $club = Club::find($id);
        return view('clubs.edit', compact('club'));
    }

    public function update(Request $request, $id)
    {
        $club = Club::find($id);
        $club->nom = $request->nom;
        $club->save();
        return redirect()->route('clubs.index');
    }

    public function destroy($id)
    {
        $club = Club::find($id);
        $club->delete();
        return redirect()->route('clubs.index');
    }
}
