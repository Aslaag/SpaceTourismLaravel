<?php

namespace App\Http\Controllers\Admin;

use App\Models\CrewMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage; // Correction ici

class CrewAdminController extends Controller
{
    public function index()
    {
        $crewMembers = CrewMember::all();
        return view('admin.crewMembers.index', compact('crewMembers'));
    }

    public function create()
    {
        return view('admin.crewMembers.create');
    }

    public function store(Request $request)
    {
        // 1) Valider et récupérer les données validées
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'role'    => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'image'       => 'nullable|image|max:2048', // on peut forcer image|dimensions si besoin
        ]);

        // 3) Gérer le fichier image
        if ($request->hasFile('image')) {
            $file     = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path     = $file->storeAs('media/images/crew', $filename, 'public');
            $data['image'] = $path;   // => "media/images/crewMember/nomimage.png"
        }

        // 4) Créer la crewMember
        CrewMember::create($data);

        // 5) Rediriger
        return redirect()->route('admin.crewMembers.index')
            ->with('success', 'crewMember créée avec succès !');
    }

    public function edit($id)
    {
        $crewMember = CrewMember::findOrFail($id);
        return view('admin.crewMembers.edit', compact('crewMember'))
            ->with('success', 'crewMember modifiée avec succès !');
    }

    public function update(Request $request, $id)
    {
        // 1) Valider et récupérer les données validées
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'role'    => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'image'       => 'nullable|image|max:2048', // on peut forcer image|dimensions si besoin
        ]);

        // 2) Récupérer l'instance de la crewMember que l'on veut modifier
        $crewMember = CrewMember::findOrFail($id);

        // 3) Gérer le fichier image
        if ($request->hasFile('image')) {
            $file     = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path     = $file->storeAs('media/images/crew', $filename, 'public');
            $data['image'] = $path;   // => "media/images/crewMember/nomimage.png"

            // Supprimer l'ancienne image si elle existe
            if ($crewMember->image && Storage::disk('public')->exists($crewMember->image)) {
                Storage::disk('public')->delete($crewMember->image);
            }
        }

        // 4) Update la crewMember avec les nouvelles données
        $crewMember->update($data);

        // 5) Rediriger avec message de succès
        return redirect()->route('admin.crewMembers.index')
            ->with('success', 'crewMember modifiée avec succès !');
    }

    public function destroy($id)
    {
        $crewMember = CrewMember::findOrFail($id);

        // Supprimer l'image avant de supprimer la crewMember
        if ($crewMember->image && Storage::disk('public')->exists($crewMember->image)) {
            Storage::disk('public')->delete($crewMember->image);
        }

        $crewMember->delete();

        return redirect()->route('admin.crewMembers.index')
            ->with('success', 'crewMember supprimée avec succès !');
    }
}
