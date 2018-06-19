<?php

namespace App\Http\Controllers;

use App\Feuille;
use App\Agent;
use App\Horaire;

use Illuminate\Http\Request;
use Illuminate\Database\Query\Expression;
use Maatwebsite\Excel\Facades\Excel;
use Helpers;

class FeuilleController extends Controller
{

    public function generateAstreintes(Request $request)
    {
        $from = $request->input('from');
        $to = date('Y-m-d', strtotime($from. ' + 1 days'));
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

    public function generateEffectifs(Request $request)
    {
        $from = $request->input('from');
        $middle = date('Y-m-d', strtotime($from. ' + 1 days'));
        $to = date('Y-m-d', strtotime($from. ' + 2 days'));
       
        $agent = $request->input('agent');
        $agent = Agent::with(['grade'])->find($agent);
        $horaires = Horaire::with(['horaireAgent'])->whereBetween(new Expression('DATE(horaire_debut)'), array($from, $to))->get();
        
        // LOGIC
        $effectifs = $this->checkEffectif($horaires, $from, $middle, $to);


        return view('effectif', [
            'effectifs' => $effectifs,
            'agent' => $agent,
            'from' => $from,
            'to' => $to,
            'middle' => $middle,
        ]);
    }

    function checkEffectif($horaires, $from, $middle, $to) {
        foreach($horaires as $key => $value) {
            $dateTime = explode(' ', $value['horaire_debut']);
            $date = $dateTime[0];
            $heure = (int)explode(':', $dateTime[1])[0];
            
            // FROM ARRAY
            for($i = 18; $i <= 23; $i++) {
                // INITIALIZE ARRAY

                if(!isset($timeTables[$from][$i])) {
                    $timeTables[$from][$i]['garde'] = 0;
                    $timeTables[$from][$i]['astreinte'] = 0;
                    $timeTables[$from][$i]['total'] = 0;
                }
                
                if($heure === $i && $date === $from) {
                    $timeTables[$from][$heure][$value['type']] += 1;
                    $timeTables[$from][$heure]['total'] += 1; 
                }
                
            }
            // MIDDLE ARRAY
            for($j = 0; $j <= 23; $j++) {
                // INITIALIZE ARRAY
                if(!isset($timeTables[$middle][$j])) {
                    $timeTables[$middle][$j]['garde'] = 0;
                    $timeTables[$middle][$j]['astreinte'] = 0;
                    $timeTables[$middle][$j]['total'] = 0;
                }
                if($heure === $j && $date === $middle) {
                    $timeTables[$middle][$heure][$value['type']] += 1;
                    $timeTables[$middle][$heure]['total'] += 1;
                }
            }
            // TO ARRAY
            for($k = 0; $k <= 6; $k++) {
                    // INITIALIZE ARRAY
                if(!isset($timeTables[$to][$k])) {
                    $timeTables[$to][$k]['garde'] = 0;
                    $timeTables[$to][$k]['astreinte'] = 0;
                    $timeTables[$to][$k]['total'] = 0;
                }
                if($heure === $k && $date === $to) {
                    $timeTables[$to][$heure][$value['type']] += 1;
                    $timeTables[$to][$heure]['total'] += 1;
                }
            }
        }
        return $timeTables;
    }

    
}