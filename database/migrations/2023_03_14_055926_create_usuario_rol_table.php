<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("usuario_rol", function (Blueprint $table) {
            $table->bigInteger("id_usuario");
            $table
                ->foreign("id_usuario")
                ->references("id_usuario")
                ->on("usuarios");

            $table->bigInteger("id_rol");
            $table
                ->foreign("id_rol")
                ->references("id_rol")
                ->on("rol");

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
        Schema::dropIfExists("usuario_rol");
    }
}
