<?php

namespace App\Http\Controllers;

use App\Uv;
use Illuminate\Http\Request;

class UvController extends Controller
{

    public function showAllUvs()
    {
        return response()->json(Uv::all());
    }

    public function showOneUv($id)
    {
        return response()->json(Uv::find($id));
    }

    public function create(Request $request)
    {
        $Uv = Uv::create($request->all());

        return response()->json($Uv, 201);
    }

    public function update($id, Request $request)
    {
        $Uv = Uv::findOrFail($id);
        $Uv->update($request->all());

        return response()->json($Uv, 200);
    }

    public function delete($id)
    {
        Uv::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}