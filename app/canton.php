<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class canton extends Model
{
	protected $fillable = [
	'id',
	'canton',
	'postal',
	'id_province',
	];

	/*protected $rules = [
	'canton'      => 'required|unique|max:15',
	];*/

	public function province(){
		return $this->belongsTo('App\Province','id_province');
	}

	public function parroquies()
	{
		return $this->hasMany('App\parroquia', 'id');
	}

	public function employe(){
		return $this->hasMany('App\Employ','id');
	}

}
