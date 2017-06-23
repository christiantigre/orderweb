<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empress extends Model
{
    protected $fillable = [
    'id',
    'name',
    'ruc',
    'email',
    'telefono',
    'dir',
    'propietario',
    'logo',
    'description',
    'slogan',
    'cel1',
    'cel2',
    'fax',
  ];

  protected $rules = [
    'name'      => 'required|unique:permissions',
  ];
}
