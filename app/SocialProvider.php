<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
	protected $fillable = ['provider_id','provider','avatar'];
    function user()
    {
    	return $this->belongTo(User::class);
    }
 
}
