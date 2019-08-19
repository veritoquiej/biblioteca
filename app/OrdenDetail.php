<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenDetail extends Model
{
 protected $table = 'order_details';

   protected $fillable = ['book_id', 'client_id', 'client_information', 'deliver_date', 'delivery_time', 'return_date', 'state', 'order_number'];


     

      public function clients(){
     	return $this->belongsTo(Clients::class);
        }
     
       public function ordenDelail(){
     	return $this->belongsTo(OrdenDelail::class);
     
     }


}
