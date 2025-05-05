<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CrewMember;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    public function index() {
        $crewMembers = CrewMember::paginate();

        return view('crew.index', ['crewMembers' => $crewMembers]);
    }

    public function show(string $slug)
    {
        // Recherche de la crewMember actuelle
        $crewMember = CrewMember::where('slug', '=', $slug)->firstOrFail();
    
        // Récupérer l'élément précédent, s'il existe
        $previous = CrewMember::where('id', '<', $crewMember->id)->orderBy('id', 'desc')->first();
    
        // Récupérer l'élément suivant, s'il existe
        $next = CrewMember::where('id', '>', $crewMember->id)->orderBy('id', 'asc')->first();
    
        // Passer les variables à la vue
        return view('crew.show', compact('crewMember', 'previous', 'next'));
    }
}
