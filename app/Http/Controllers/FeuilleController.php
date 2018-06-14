<?php

namespace App\Http\Controllers;

use App\Feuille;
use App\Agent;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Expression;
use Helpers;

class FeuilleController extends Controller
{

    public function generateAstreintes(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');
        $equipe = Helpers::teamWeek();

        $horaires = Agent::with(['grade', 'uv', 'nomination', 'equipe', 'horaireAgents' => function($query) use ($from, $to) {
            $query->where(new Expression('DATE(horaire_debut)'), $from);
            $query->where(new Expression('DATE(horaire_fin)'), $from)
            ->orWhere(new Expression('DATE(horaire_debut)'), $to);
            $query->where(new Expression('DATE(horaire_fin)'), $to);
        }])->orderBy('id_equipe', 'ASC')->orderBy('id_grade', 'DESC')->get();

        return view('astreinte', [
            'agentsHoraires' => $horaires,
            'from' => $from,
            'to' => $to,
            'equipe' => $equipe
        ]);
    }

    
}