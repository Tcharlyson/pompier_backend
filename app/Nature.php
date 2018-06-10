<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nature extends Model
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

    public function natureDeparts()
    {
        return $this->hasMany('App\Depart', 'id_nature');
    }
}