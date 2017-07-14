<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
  'id',
  'name',
  'des',
  'thumb',
  ];

  protected $rules = [
  'name'      => 'required|unique',
  ];

  public function subcategories()
  {
    return $this->hasMany('App\Subcategory', 'id');
  }

  public function galerry()
  {
    return $this->hasMany('App\Gallery', 'id');
  }
  

   //public function subcategories(){
    //return $this->hasMany('App\Subcategory');
  //}

}
