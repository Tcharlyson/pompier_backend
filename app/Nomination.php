<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'appelation','diminutif'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function nominationsAgents()
    {
        return $this->hasMany('App\Agent');
    }
}