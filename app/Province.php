<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
  'id',
  'province',
  'postal',
  'id_country',
  ];

  protected $rules = [
  'province'      => 'required|unique|max:15',
  'postal'      => 'max:15',
  ];
}
