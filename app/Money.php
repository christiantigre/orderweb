<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    protected $fillable = [
	'money',
	'abreviatura',
	'img',
	'statu',
	];
}
