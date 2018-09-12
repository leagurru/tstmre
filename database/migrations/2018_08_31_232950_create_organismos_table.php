<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganismosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organismos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('nombreCorto',8)->nullable();
            $table->string('email')->default('???');
            $table->boolean('es_mre')->default(false);  // booleano que indica si el organismo es mre
            $table->integer('edificio_id');
            $table->integer('piso');
            $table->string('pisoTexto', 20);
            $table->string('observaciones')->nullable($value = true);
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
        Schema::dropIfExists('organismos');
    }
}
