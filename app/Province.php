<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
  'id',
  'province',
  'postal',
  'id_country',
  ];

  public function country(){
    return $this->belongsTo('App\Country','id_country');
  }

  public function canton()
  {
    return $this->hasMany('App\canton', 'id');
  }


}
