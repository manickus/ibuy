<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateMessageRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_message_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pm_id')->unsinged();
            $table->integer('sender_id')->unsinged();
            $table->integer('receiver_id')->unsinged();
            $table->text('message');
            $table->boolean('read');
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
        Schema::dropIfExists('private_message_replies');
    }
}
