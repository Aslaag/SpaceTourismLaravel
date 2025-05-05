<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage; // Correction ici

class DestinationAdminController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('admin.destinations.index', compact('destinations'));
    }

    public function create()
    {
        return view('admin.destinations.create');
    }

    public function store(Request $request)
    {
        // 1) Valider et récupérer les données validées
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048', // on peut forcer image|dimensions si besoin
            'distance'    => 'nullable|string|max:255',
            'travel_time' => 'nullable|string|max:255',
        ]);

        // 3) Gérer le fichier image
        if ($request->hasFile('image')) {
            $file     = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path     = $file->storeAs('media/images/destination', $filename, 'public');
            $data['image'] = $path;   // => "media/images/destination/nomimage.png"
        }

        // 4) Créer la destination
        Destination::create($data);

        // 5) Rediriger
        return redirect()->route('admin.destinations.index')
            ->with('success', 'Destination créée avec succès !');
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        return view('admin.destinations.edit', compact('destination'))
            ->with('success', 'Destination modifiée avec succès !');
    }

    public function update(Request $request, $id)
    {
        // 1) Valider et récupérer les données validées
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048', // on peut forcer image|dimensions si besoin
            'distance'    => 'nullable|string|max:255',
            'travel_time' => 'nullable|string|max:255',
        ]);

        // 2) Récupérer l'instance de la destination que l'on veut modifier
        $destination = Destination::findOrFail($id);

        // 3) Gérer le fichier image
        if ($request->hasFile('image')) {
            $file     = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path     = $file->storeAs('media/images/destination', $filename, 'public');
            $data['image'] = $path;   // => "media/images/destination/nomimage.png"

            // Supprimer l'ancienne image si elle existe
            if ($destination->image && Storage::disk('public')->exists($destination->image)) {
                Storage::disk('public')->delete($destination->image);
            }
        }

        // 4) Update la destination avec les nouvelles données
        $destination->update($data);

        // 5) Rediriger avec message de succès
        return redirect()->route('admin.destinations.index')
            ->with('success', 'Destination modifiée avec succès !');
    }

    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);

        // Supprimer l'image avant de supprimer la destination
        if ($destination->image && Storage::disk('public')->exists($destination->image)) {
            Storage::disk('public')->delete($destination->image);
        }

        $destination->delete();

        return redirect()->route('admin.destinations.index')
            ->with('success', 'Destination supprimée avec succès !');
    }
}
