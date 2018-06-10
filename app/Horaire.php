<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id_agent','type','horaire_debut','horaire_fin'
    ];
 
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function horaireAgent() {
        return $this->belongsTo('App\Agent', 'id_agent');
    }
}