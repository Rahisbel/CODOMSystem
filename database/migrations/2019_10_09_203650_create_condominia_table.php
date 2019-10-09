<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondominiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('direction');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('condominia');
    }
}
