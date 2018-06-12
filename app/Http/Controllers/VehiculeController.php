<?php

namespace App\Http\Controllers;

use App\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{

    public function showAllVehicules()
    {
        return response()->json(Vehicule::all());
    }

    public function showOneVehicule($id)
    {
        return response()->json(Vehicule::find($id));
    }

    public function create(Request $request)
    {
        $Vehicule = Vehicule::create($request->all());

        return response()->json($Vehicule, 201);
    }

    public function update($id, Request $request)
    {
        $Vehicule = Vehicule::findOrFail($id);
        $Vehicule->update($request->all());

        return response()->json($Vehicule, 200);
    }

    public function delete($id)
    {
        Vehicule::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}