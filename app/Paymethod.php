<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymethod extends Model
{
    protected $fillable = [
	'id',
	'banco',
	'cuenta',
	'titular',
	'num_tarjeta',
	'statu',
	];
}


