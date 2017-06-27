<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
  protected $fillable = [
  'id',
  'name',
  'description',
  'id_categorie',
  'status',
  ];

  protected $rules = [
  'name'      => 'required|unique',
  ];


  

  public function categorie(){
    return $this->belongsTo('App\Category','id_categorie');
  }

}
