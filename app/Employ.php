<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employ extends Model
{
    protected $fillable = [
	'id',
	'name',
	'ci',
	'lastname',
	'address',
	'cel',
	'phone',
	'email',
	'date_nac',
	'perfil',
	'status',
	'id_country',
	'id_province',
	'id_canton',
	'id_parroquias',
	'id_departments'
	];

	public function country()
	{
		return $this->belongsTo('App\Country', 'id_country');
	}

	public function province()
	{
		return $this->belongsTo('App\Province', 'id_province');
	}
	public function canton()
	{
		return $this->belongsTo('App\canton', 'id_canton');
	}
	public function parroquia()
	{
		return $this->belongsTo('App\parroquia', 'id_parroquias');
	}
	public function department()
	{
		return $this->belongsTo('App\Department', 'id_departments');
	}

}
