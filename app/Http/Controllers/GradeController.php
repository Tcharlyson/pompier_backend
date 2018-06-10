<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{

    public function showAllGrades()
    {
        return response()->json(Grade::all());
    }

    public function showOneGrade($id)
    {
        return response()->json(Grade::find($id));
    }

    public function create(Request $request)
    {
        $Grade = Grade::create($request->all());

        return response()->json($Grade, 201);
    }

    public function update($id, Request $request)
    {
        $Grade = Grade::findOrFail($id);
        $Grade->update($request->all());

        return response()->json($Grade, 200);
    }

    public function delete($id)
    {
        Grade::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}