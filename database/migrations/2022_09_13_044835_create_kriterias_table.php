<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriterias', function (Blueprint $table) {
            $table->string('kode_kriteria');
            $table->string('nama');
            $table->double('k1');
            $table->double('k2');
            $table->double('k3');
            $table->double('k4');
            $table->double('k5');
            $table->double('k6');
            $table->double('k7');
            $table->double('k8');
            $table->double('k9');
            $table->double('jumlah');
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
        Schema::dropIfExists('kriterias');
    }
};
