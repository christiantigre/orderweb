<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
  'id',
  'iso',
  'country',
  ];

  protected $rules = [
  'iso'      => 'unique|max:3',
  'country'      => 'required|unique|max:15',
  ];

  public function provinces()
  {
    return $this->hasMany('App\Province', 'id');
  }

  public function employe(){
    return $this->hasMany('App\Employ','id');
  }

}
