<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    public function index() {
        $destinations = Destination::paginate();

        return view('destination.index', ['destinations' => $destinations]);
    }

    public function show(string $slug)
    {
        // Recherche de la destination actuelle
        $destination = Destination::where('slug', '=', $slug)->firstOrFail();
    
        // Récupérer l'élément précédent, s'il existe
        $previous = Destination::where('id', '<', $destination->id)->orderBy('id', 'desc')->first();
    
        // Récupérer l'élément suivant, s'il existe
        $next = Destination::where('id', '>', $destination->id)->orderBy('id', 'asc')->first();
    
        // Passer les variables à la vue
        return view('destination.show', compact('destination', 'previous', 'next'));
    }
    
}
