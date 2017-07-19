<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $table = 'clients'; 

    protected $fillable = [
	'id_user',
	'logo',
	'web',
	'link_web',
	'description',
	'status',
	];
}
