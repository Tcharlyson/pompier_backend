<?php

namespace App\Http\Controllers;

use App\Horaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HoraireController extends Controller
{

    public function showAllHoraires(Request $request)
    {
        $date = $request->input('date');

        if(isset($date)) {
            return response()->json(DB::select("SELECT * FROM horaires WHERE DATE(horaire_debut) = '" . $date . "' OR DATE(horaire_fin) = '" . $date . "'"));
        }
        return response()->json(Horaire::all());
    }    

    public function showOneHoraire($id)
    {
        return response()->json(Horaire::find($id));
    }

    public function create(Request $request)
    {
        $Horaire = Horaire::create($request->all());
        return response()->json($Horaire, 201);
    }

    public function update($id, Request $request)
    {
        $Horaire = Horaire::findOrFail($id);
        $Horaire->update($request->all());

        return response()->json($Horaire, 200);
    }

    public function delete($id)
    {
        Horaire::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}