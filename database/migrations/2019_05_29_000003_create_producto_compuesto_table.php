<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoCompuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_compuesto', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('producto_compuesto_id');
            $table->unsignedInteger('producto_id');
            $table->timestamps();

            $table->foreign('producto_compuesto_id')->references('id')->on('producto');
            $table->foreign('producto_id')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_compuesto');
    }
}
