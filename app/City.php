<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
  'id',
  'city',
  'postal',
  'id_province',
  ];

  protected $rules = [
  'city'      => 'required|unique|max:15',
  'postal'      => 'unique|max:15',
  ];
}
