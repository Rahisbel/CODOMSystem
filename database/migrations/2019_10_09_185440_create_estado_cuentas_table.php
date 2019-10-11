<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_cuentas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('id_inmueble');
            $table->text('mes_cancelar');
            $table->text('fecha');
            $table->text('monto');
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
        Schema::dropIfExists('estado_cuentas');
    }
}
