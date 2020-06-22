<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromocoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->decimal('preco');
            $table->unsignedInteger('grupo_id');
            $table->string('imagem')->nullable();
            $table->unsignedInteger('unidade_id');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('grupo_id')->references('id')->on('grupos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('unidade_id')->references('id')->on('unidades')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promocoes');
    }
}
