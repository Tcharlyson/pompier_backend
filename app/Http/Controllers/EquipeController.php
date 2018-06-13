<?php

namespace App\Http\Controllers;

use App\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{

    public function showAllEquipes()
    {
        return response()->json(Equipe::all());
    }

    public function showOneEquipe($id)
    {
        return response()->json(Equipe::find($id));
    }

    public function create(Request $request)
    {
        $Equipe = Equipe::create($request->all());

        return response()->json($Equipe, 201);
    }

    public function update($id, Request $request)
    {
        $Equipe = Equipe::findOrFail($id);
        $Equipe->update($request->all());

        return response()->json($Equipe, 200);
    }

    public function delete($id)
    {
        Equipe::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}