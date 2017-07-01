<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
  'id',
  'iso',
  'country',
  ];

  protected $rules = [
  'iso'      => 'unique|max:3',
  'country'      => 'required|unique|max:15',
  ];
}
