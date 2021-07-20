<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 80);
            $table->unsignedBigInteger('asignatura_id');
            $table->unsignedBigInteger('usuario_id')->nullable()->default(null);
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('asignatura_id')->references('id')->on('asignatura');
            $table->foreign('usuario_id')->references('id')->on('usuario');
            $table->foreign('tipo_id')->references('id')->on('tipo_archivo');
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
        Schema::dropIfExists('archivo');
    }
}
