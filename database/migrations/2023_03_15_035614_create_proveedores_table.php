<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("proveedores", function (Blueprint $table) {
            $table->id("id_proveedor");
            $table->string("nombre");
            $table->string("direccion");
            $table->string("telefono");
            $table->string("celular");
            $table->string("correo_electronico");
            $table->text("descripcion")->nullable(true);
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
        Schema::dropIfExists("proveedores");
    }
}
