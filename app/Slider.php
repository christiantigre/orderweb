<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
	'tittle',
	'subtittle',
	'paragraph',
	'link',
	'tittle_link',
	'img',
	];
}
