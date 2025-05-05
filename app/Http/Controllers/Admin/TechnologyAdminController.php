<?php

namespace App\Http\Controllers\Admin;

use App\Models\Technology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage; // Correction ici

class TechnologyAdminController extends Controller
{
  public function index()
  {
    $technologies = Technology::all();
    return view('admin.technologies.index', compact('technologies'));
  }

  public function create()
  {
    return view('admin.technologies.create');
  }

  public function store(Request $request)
  {
    // 1) Valider et récupérer les données validées
    $data = $request->validate([
      'name' => 'required|string|max:255',
      'description' => 'nullable|string',
      'image_desktop' => 'nullable|image|max:2048',
      'image_mobile' => 'nullable|image|max:2048',
    ]);

    // 2) Gérer les fichiers image
    if ($request->hasFile('image_desktop')) {
      $file = $request->file('image_desktop');
      $filename = $file->getClientOriginalName();
      $path = $file->storeAs('media/images/technology', $filename, 'public');
      $data['image_desktop'] = $path; // => "media/images/technology/nomimage.png"
    }

    if ($request->hasFile('image_mobile')) {
      $file = $request->file('image_mobile');
      $filename = $file->getClientOriginalName();
      $path = $file->storeAs('media/images/technology', $filename, 'public');
      $data['image_mobile'] = $path; // => "media/images/technology/nomimage.png"
    }

    // 3) Créer la technologie avec les données
    Technology::create($data);

    // 4) Rediriger
    return redirect()->route('admin.technologies.index')
      ->with('success', 'Technology créée avec succès !');
  }

  public function edit($id)
  {
    $technology = Technology::findOrFail($id);
    return view('admin.technologies.edit', compact('technology'));
  }

  public function update(Request $request, $id)
  {
    // 1) Valider et récupérer les données validées
    $data = $request->validate([
      'name' => 'required|string|max:255',
      'description' => 'nullable|string',
      'image_desktop' => 'nullable|image|max:2048',
      'image_mobile' => 'nullable|image|max:2048',
    ]);

    // 2) Récupérer la technologie existante
    $technology = Technology::findOrFail($id);

    // 3) Gérer les fichiers image
    if ($request->hasFile('image_desktop')) {
      $file = $request->file('image_desktop');
      $filename = $file->getClientOriginalName();
      $path = $file->storeAs('media/images/technology', $filename, 'public');
      $data['image_desktop'] = $path;  // Remplacer l'ancienne image
    }

    if ($request->hasFile('image_mobile')) {
      $file = $request->file('image_mobile');
      $filename = $file->getClientOriginalName();
      $path = $file->storeAs('media/images/technology', $filename, 'public');
      $data['image_mobile'] = $path;  // Remplacer l'ancienne image
    }

    // 4) Mettre à jour la technologie existante avec les nouvelles données
    $technology->update($data);

    // 5) Rediriger avec message de succès
    return redirect()->route('admin.technologies.index')
      ->with('success', 'Technology modifiée avec succès !');
  }

  public function destroy($id)
  {
    $technology = Technology::findOrFail($id);

    // Supprimer l'image avant de supprimer la technologie
    if ($technology->image_desktop && Storage::disk('public')->exists($technology->image_desktop)) {
      Storage::disk('public')->delete($technology->image_desktop);
    }

    if ($technology->image_mobile && Storage::disk('public')->exists($technology->image_mobile)) {
      Storage::disk('public')->delete($technology->image_mobile);
    }

    // Supprimer la technologie
    $technology->delete();

    return redirect()->route('admin.technologies.index')
      ->with('success', 'Technology supprimée avec succès !');
  }
}
