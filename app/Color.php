<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
	protected $fillable = [
	'color',
	'codigo',
	'description',
	];

	/*protected $rules = [
	'color'      => 'required|unique:colors',
	'codigo'      => 'required',
	];*/
}
