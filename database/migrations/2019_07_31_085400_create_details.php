<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {




    Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_information', 45);
            $table->date('deliver_date');
            $table->date('delivery_time');
            $table->date('return_date');
            $table->string('state');
            $table->integer('order_number');
            $table->bigInteger('client_id')->unsigned();

            $table->timestamps();
        

          $table->foreign('client_id')->references('id')->on('clients');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
