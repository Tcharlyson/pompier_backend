<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentsVehicule extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id_agent','id_vehicule','id_fonction'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function agentsVehiculeAgent() {
        return $this->belongsTo('App\Agent', 'id_agent');
    }

    public function agentsVehiculeVehicule() {
        return $this->belongsTo('App\Vehicule', 'id_vehicule');
    }

    public function agentsVehiculeFonction() {
        return $this->belongsTo('App\Fonction', 'id_fonction');
    }
}