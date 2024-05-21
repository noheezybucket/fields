<?php

namespace App\Http\Controllers;

use App\Models\Terrain;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    public function index()
    {
        $terrains = Terrain::all();

        return view('terrains.index', compact('terrains'));
    }

    public function create()
    {
        return view('terrains.create');
    }

    public function process_create(Request $request)
    {
        $request->validate([
            'longueur' => 'required',
            'largeur' => 'required',
            'type_de_papier' => 'string',

        ]);

        Terrain::create($request->all());

        return redirect(route('create-terrain'))->with('status', 'Les informations ont été enregistrés avec succès');
    }

    public function update($id)
    {
        $terrain = Terrain::find($id);
        return view('terrains.update', compact('terrain'));
    }

    public function process_update(Request $request)
    {

        $request->validate([
            'longueur' => 'required',
            'largeur' => 'required',
            'type_de_papier' => 'string',

        ]);

        $terrain = Terrain::find($request->id);

        $terrain->update($request->all());

        return redirect(route('update-terrain', ['id' => $request->id]))->with('status', 'Les informations ont été enregistrés avec succès');
    }

    public function destroy($id)
    {
        $terrain = Terrain::find($id);

        return view('terrains.delete', compact('terrain'));
    }

    public function process_destroy(Request $request)
    {
        $terrain = Terrain::find($request->id);

        $terrain->delete();

        return redirect(route('home'))->with('status', 'Suppression effectuée avec succès');
    }
}
