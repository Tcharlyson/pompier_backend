<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'nom','prenom','id_grade','equipe','id_uv','specialite','carence','conduite','id_nomination','est_stagiaire','telephone','num','est_admin'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function grade()
    {
        return $this->belongsTo('App\Grade', 'id_grade');
    }

    public function uv()
    {
        return $this->belongsTo('App\Uv', 'id_uv');
    }

    public function nomination()
    {
        return $this->belongsTo('App\Nomination', 'id_nomination');
    }
}