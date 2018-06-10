<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depart extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'date','numero_codis','numero_cr','id_nature','id_commune','date_appel','date_depart','date_sll','date_rentre','est_annule'
    ];

    

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function departNature()
    {
        return $this->belongsTo('App\Nature', 'id_nature');
    }
    
    public function departCommune()
    {
        return $this->belongsTo('App\Commune', 'id_commune');
    }
}