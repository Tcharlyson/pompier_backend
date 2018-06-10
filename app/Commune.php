<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'nom','postal'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function communeDeparts()
    {
        return $this->hasMany('App\Depart', 'id_commune');
    }
}