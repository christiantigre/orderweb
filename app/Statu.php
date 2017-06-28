<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    protected $fillable = [
  'id',
  'statu',
  ];

  protected $rules = [
  'statu'      => 'required|unique',
  ];
}
