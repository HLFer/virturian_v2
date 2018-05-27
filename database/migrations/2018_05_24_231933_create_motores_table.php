<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modelo', 100);
            $table->enum('numero_de_polos', [2, 4, 6, 8]);
            $table->enum('tensao_de_rede_v', [220, 380, 440]);
            $table->enum('regime_de_servico', ['S1', 'S2', 'S3', 'S4', 'S5']);
            $table->Integer('corrente_nominal_a');
            $table->Integer('potencia_nominal_w');
            $table->Integer('torque_maximo_nm');
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
        Schema::dropIfExists('motores');
    }
}
