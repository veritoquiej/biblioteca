<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'details';

   protected $fillable = ['book_id', 'quantity'];

      public function book(){
     	return $this->belongsTo(Book::class);
        }
     
       public function detail(){
     	return $this->belongsTo(Order::class);
     

}
}
