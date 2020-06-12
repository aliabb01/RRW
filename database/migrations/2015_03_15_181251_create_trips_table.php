<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
          //  $table->integer('trip_number');
            $table->date('trip_date');
            $table->string('from');
            $table->string('to');
            $table->time('time_depart');
           
            $table->unsignedBigInteger('train_number');
            $table->integer('price');
            $table->timestamps();
        });
        Schema::table('trips', function($table)
{
    $table->foreign('train_number')->references('id')->on('trains')->onDelete('cascade');
   /// $table->foreign('from')->references('id')->on('cities')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
