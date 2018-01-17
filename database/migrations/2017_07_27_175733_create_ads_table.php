<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsinged();
            $table->string('title');
            $table->float('maxprice');
            $table->boolean('new');
            $table->boolean('active');
            $table->integer('phone')->nullable();
            $table->string('city')->nullable();
            $table->integer('category_id')->unsinged();
            $table->integer('ad_type')->unsinged();
            $table->text('body');
            $table->timestamps();
         


        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
