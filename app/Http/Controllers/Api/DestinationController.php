<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * @group Destinations
     *
     * Récupérer toutes les destinations
     *
     * Cette route retourne toutes les destinations disponibles dans la base de données.
     */
    public function index()
    {
        return response()->json(\App\Models\Destination::all());
    }

    /**
     * @group Destinations
     *
     * Voir une destination spécifique
     *
     * Cette route retourne une destination en fonction de son slug.
     */
    public function show($id)
    {
        return response()->json(\App\Models\Destination::findOrFail($id));
    }

    public function store(Request $request)
    {
        $destination = \App\Models\Destination::create($request->all());
        return response()->json($destination, 201);
    }

    public function update(Request $request, $id)
    {
        $destination = \App\Models\Destination::findOrFail($id);
        $destination->update($request->all());
        return response()->json($destination);
    }

    public function destroy($id)
    {
        \App\Models\Destination::destroy($id);
        return response()->json(null, 204);
    }
}
