<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaRollPermiso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_permiso_roll', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedBigInteger('roll_id');
            $table->foreign('roll_id')->references('id')->on('roll')
            ->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('permiso_id');
            $table->foreign('permiso_id','forg_permisoroll_usuario')->references('id')->on('permiso')
            ->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('table_permiso_roll');
    }
}
