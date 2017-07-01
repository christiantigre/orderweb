<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class canton extends Model
{
	protected $fillable = [
	'id',
	'canton',
	'id_province',
	];

	protected $rules = [
	'canton'      => 'required|unique|max:15',
	];
}
