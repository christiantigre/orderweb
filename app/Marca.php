<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = [
  'id',
  'marca',
  'statu',
  ];

  protected $rules = [
  'marca'      => 'unique|max:3',
  ];
}
