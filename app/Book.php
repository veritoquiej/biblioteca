<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model{
	/**
	 * [$fillable description]
	 * @var [type]
	 */
  protected $fillable = ['name','autor', 'page', 'total_copies', 'available_copies'];


  public function orderDetails(){

  	return $this->hasMany('App\orderDetail');
  }

}
