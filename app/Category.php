<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
  'id',
  'name',
  'des',
  ];

  protected $rules = [
  'name'      => 'required|unique',
  ];

  public function subcategories()
  {
    return $this->hasMany('App\Subcategory', 'id');
  }
  

   //public function subcategories(){
    //return $this->hasMany('App\Subcategory');
  //}

}
