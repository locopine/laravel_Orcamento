<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id_card');
            $table->integer('saldo');
            $table->string('tipo');
            $table->string('agencia');
            $table->integer('conta');
            $table->integer('numero');
            $table->unsignedBigInteger('id_financial');
            $table->unsignedBigInteger('id_usuario');
            $table->timestamps();

            $table->foreign('id_financial')->references('id_financial')->on('financial__institutions');
            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
