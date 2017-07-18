<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parroquia extends Model
{
	protected $fillable = [
	'id',
	'parroquia',
	'id_canton',
	'postal',
	];

	public function canton(){
		return $this->belongsTo('App\canton','id_canton');
	}

	public function employe(){
		return $this->hasMany('App\Employ','id');
	}
	
}
