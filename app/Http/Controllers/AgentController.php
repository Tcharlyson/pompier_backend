<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{

    public function showAllAgents()
    {
        return response()->json(Agent::with(['grade', 'uv', 'nomination'])->get());
    }

    public function showOneAgent($id)
    {
        return response()->json(Agent::with(['grade', 'uv', 'nomination'])->find($id));
    }

    public function create(Request $request)
    {
        $agent = Agent::create($request->all());

        return response()->json($agent, 201);
    }

    public function update($id, Request $request)
    {
        $agent = Agent::findOrFail($id);
        $agent->update($request->all());

        return response()->json($agent, 200);
    }

    public function delete($id)
    {
        Agent::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}