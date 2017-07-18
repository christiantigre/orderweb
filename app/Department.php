<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $fillable = [
	'id',
	'department',
	'status'
	];

	/*public function employee(){
    return $this->belongsTo('App\Employee','id');
  }*/
   public function employe(){
    return $this->hasMany('App\Employ','id');
  }

}
