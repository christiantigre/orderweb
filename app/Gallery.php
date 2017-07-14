<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	protected $fillable = [
	'id',
	'tittle1',
	'tittle2',
	'subtittle',
	'client',
	'date',
	'link',
	'paragraph',
	'img',
	'tag',
	'status',
	];

	public function categorie(){
		return $this->belongsTo('App\Category','id_categorie');
	}

}
