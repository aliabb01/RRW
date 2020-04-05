<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('ticket_number');
            $table->unsignedBigInteger('passenger_id');   
            $table->date('ticket_date');
            $table->integer('price');
          $table->unsignedBigInteger('trip_number');
          
           
       
        });
        Schema::table('tickets', function($table)
        { $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade');
                 $table->foreign('trip_number')->references('id')->on('trips')->onDelete('cascade');
          //  $table->foreign('from')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
