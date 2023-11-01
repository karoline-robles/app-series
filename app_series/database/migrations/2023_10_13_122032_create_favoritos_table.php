<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pessoa');
            $table->unsignedBigInteger('id_serie');

            $table->foreign('id_pessoa')
                  ->references('id')
                  ->on('pessoas')
                  ->onDelete('cascade');

            $table->foreign('id_serie')
                  ->references('id')
                  ->on('series')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('favoritos');
    }
};
