<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'appelation','immatriculation','armement'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function vehiculeAgents()
    {
        return $this->hasMany('App\AgentsVehicule', 'id_vehicule');
    }
}