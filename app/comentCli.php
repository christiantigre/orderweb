<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentCli extends Model
{
    protected $fillable = [
  'id',
  'comment',
  'accept',
  'id_user',
  ];

  public function users(){
    return $this->belongsTo('App\User','id_user');
  }

}
