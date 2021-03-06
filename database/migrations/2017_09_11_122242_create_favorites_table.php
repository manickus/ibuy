<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {             
           
            $table->integer('ad_id')->unsigned();
            $table->integer('user_id')->unsigned();

        });

        Schema::table('favorites', function (Blueprint $table) {     
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');        
     

        });        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
