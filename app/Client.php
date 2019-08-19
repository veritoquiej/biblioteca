<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model{

 
/**
 * [$fillable description]
 * @var [type]
 */
    protected $fillable = ['code','fullname', 'birthdate', 'is_active'];


 
     public function detail(){
    
  	return $this->hasMany('App\Detail');
  }
    }



