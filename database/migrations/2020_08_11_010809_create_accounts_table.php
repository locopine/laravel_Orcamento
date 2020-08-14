<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id_account');
            $table->integer('saldo');
            $table->string('tipo');
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
        Schema::dropIfExists('accounts');
    }
}
