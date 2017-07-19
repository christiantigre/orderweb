<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $table = 'clients'; 

	protected $fillable = [
	'id_user',
	'name_local',
	'nom_cli',
	'app_cli',
	'ci',
	'ruc_local',
	'date_nac',	
	'dir_local',
	'phone_local',
	'cel_local',
	'mail_local',
	'web',
	'link_web',
	'area_local',
	'description',
	'logo',
	'tarjeta',
	'status',
	'web_visible',
	'fb',
	'twi',
	];

	public function users(){
		return $this->belongsTo('App\User','id_user');
	}
}
