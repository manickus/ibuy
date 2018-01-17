<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsinged();
            $table->string('adress');
            $table->string('city');
            $table->string('zipcode');
            $table->string('additional_info')->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('alias')->default('Mój Adres');
            $table->boolean('saved');
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
        Schema::dropIfExists('adresses');
    }
}
