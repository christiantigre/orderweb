<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parroquia extends Model
{
    protected $fillable = [
	'id',
	'parroquia',
	'id_canton',
	];

	protected $rules = [
	'parroquia'      => 'required|max:15',
	];
}
