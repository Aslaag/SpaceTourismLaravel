<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    /**
     * @group CrewMember
     *
     * Récupérer tous les membres d'équipage
     *
     * Cette route retourne tous les membres d'équipage disponibles dans la base de données.
     */
    public function index()
    {
        return response()->json(\App\Models\CrewMember::all());
    }

    /**
     * @group CrewController
     *
     * Voir une destination spécifique
     *
     * Cette route retourne un membre d'équipage en fonction de son slug.
     */
    public function show($id)
    {
        return response()->json(\App\Models\CrewMember::findOrFail($id));
    }

    public function store(Request $request)
    {
        $crewMember = \App\Models\CrewMember::create($request->all());
        return response()->json($crewMember, 201);
    }

    public function update(Request $request, $id)
    {
        $crewMember = \App\Models\CrewMember::findOrFail($id);
        $crewMember->update($request->all());
        return response()->json($crewMember);
    }

    public function destroy($id)
    {
        \App\Models\CrewMember::destroy($id);
        return response()->json(null, 204);
    }
}
