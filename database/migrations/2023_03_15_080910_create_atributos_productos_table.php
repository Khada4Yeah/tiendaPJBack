<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtributosProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("atributos_productos", function (Blueprint $table) {
            $table->id("atributo_producto");

            $table->bigInteger("id_producto");
            $table
                ->foreign("id_producto")
                ->references("id_producto")
                ->on("productos");

            $table->bigInteger("id_atributo");
            $table
                ->foreign("id_atributo")
                ->references("id_atributo")
                ->on("atributos_categorias");

            $table->string("valor_unidad_medida");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("atributos_productos");
    }
}
