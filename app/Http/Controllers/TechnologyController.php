<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::paginate();

        return view('technology.index', ['technologies' => $technologies]);
    }

    public function show(string $slug)
    {
        // Recherche de la technology actuelle
        $technology = Technology::where('slug', '=', $slug)->firstOrFail();

        // Récupérer l'élément précédent, s'il existe
        $previous = Technology::where('id', '<', $technology->id)->orderBy('id', 'desc')->first();

        // Récupérer l'élément suivant, s'il existe
        $next = Technology::where('id', '>', $technology->id)->orderBy('id', 'asc')->first();

        // Passer les variables à la vue
        return view('technology.show', compact('technology', 'previous', 'next'));
    }
}
