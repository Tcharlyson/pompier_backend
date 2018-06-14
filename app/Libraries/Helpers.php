<?php 

class Helpers
{
    public static function fillColorFromDatabase($horaires, $actual, $equipeTurn, $agentEquipe, $date, $from, $to)
    {
      $color = '';

      foreach ($horaires as $key => $value) {
        $arrayHoraires = explode(' ', $value['horaire_debut']);
        $dateDebut = $arrayHoraires[0];
        $heureDebut = (int)(explode(':', $arrayHoraires[1])[0]);

        $arrayAstreintes = explode(' ', $value['created_at']);
        $dateCreated = $arrayAstreintes[0];
        $heureCreated = (int)(explode(':', $arrayAstreintes[1])[0]);

        if($heureDebut == $actual && $date == $dateDebut) {
          if($equipeTurn == $agentEquipe || $value['type'] == 'garde') {
            $color = 'blue';
          } else {
            $color = 'yellow';
          }
          if($dateCreated == $date && $heureCreated < 12 && $heureDebut < 18) {
            $color = 'yellow';
          }
          if($dateCreated == $date && $heureCreated > 12 && $heureDebut >= 18) {
            $color = 'yellow';
          }
        }
      }
      
      return $color;
    }

    public static function teamWeek() {
      $dateStarted = new DateTime("2018-06-08 18:00:00");
      $dateNow = new DateTime(date('Y-m-d H:m:i'));
      $interval = $dateStarted->diff($dateNow);
      return intval($interval->format('%a')) % 2 === 1 ? 2 : 1;
    }
}

?>