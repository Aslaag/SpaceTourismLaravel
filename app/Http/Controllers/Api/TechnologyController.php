<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{

    /**
     * @group Technology
     *
     * Récupérer toutes les technologies
     *
     * Cette route retourne toutes les technologies disponibles dans la base de données.
     */
    public function index()
    {
        return response()->json(\App\Models\Technology::all());
    }

    /**
     * @group Technology
     *
     * Voir une technologie spécifique
     *
     * Cette route retourne une technologie en fonction de son slug.
     */
    public function show($id)
    {
        return response()->json(\App\Models\Technology::findOrFail($id));
    }

    public function store(Request $request)
    {
        $technology = \App\Models\Technology::create($request->all());
        return response()->json($technology, 201);
    }

    public function update(Request $request, $id)
    {
        $technology = \App\Models\Technology::findOrFail($id);
        $technology->update($request->all());
        return response()->json($technology);
    }

    public function destroy($id)
    {
        \App\Models\Technology::destroy($id);
        return response()->json(null, 204);
    }
}
