<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMreOrganismoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mre_organismo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mre_id');
            $table->integer('organismo_id');
            $table->integer('ordenImpresion');
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
        Schema::dropIfExists('mre_organismo');
    }
}
