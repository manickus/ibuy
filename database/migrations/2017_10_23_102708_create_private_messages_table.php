<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id')->unsinged();
            $table->integer('receiver_id')->unsinged();
            $table->integer('ad_id')->unsinged();
            $table->text('message');
            $table->boolean('read');
            $table->timestamps();


            $table->index('sender_id');
            $table->index('receiver_id');
            $table->index('ad_id');
            $table->index(['sender_id','read']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('private_messages');
    }
}
