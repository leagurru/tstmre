<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escritos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('organismo_id'); //organismo destino del escrito
            $table->date('fecha');
            $table->integer('mre_id');  // organismo del usuario al crear el escrito
            $table->integer('causaNumero');
            $table->integer('causaAnio');
            $table->string('caratula');
            $table->string('observaciones')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    //            $table->dateTime('fechaHora');

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escritos');
    }
}
