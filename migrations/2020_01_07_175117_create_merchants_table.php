<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->bigInteger('gateway_id')->unsigned();
            $table->string('merchantable_type');
            $table->integer('merchantable_id');
            $table->foreign('gateway_id')
                ->references('id')
                ->on('gateways')
                ->onDelete('cascade');
            $table->unique(['email', 'merchantable_type']);

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
        Schema::dropIfExists('merchants');
    }
}
