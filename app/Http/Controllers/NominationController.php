<?php

namespace App\Http\Controllers;

use App\Nomination;
use Illuminate\Http\Request;

class NominationController extends Controller
{

    public function showAllNominations()
    {
        return response()->json(Nomination::all());
    }

    public function showOneNomination($id)
    {
        return response()->json(Nomination::find($id));
    }

    public function create(Request $request)
    {
        $Nomination = Nomination::create($request->all());

        return response()->json($Nomination, 201);
    }

    public function update($id, Request $request)
    {
        $Nomination = Nomination::findOrFail($id);
        $Nomination->update($request->all());

        return response()->json($Nomination, 200);
    }

    public function delete($id)
    {
        Nomination::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}