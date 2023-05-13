<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMercanciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mercancia', function (Blueprint $table) {
            $table->string('codigo',6);
            $table->string('nombre',25);
            $table->unsignedBigInteger('id_tipo_mercancia',25);
            $table->timestamps();
            $table->foreign('id_tipo_mercancia')
                ->references('id')
                ->on('tipo_mercancia')
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
        Schema::dropIfExists('mercancia');
    }
}
