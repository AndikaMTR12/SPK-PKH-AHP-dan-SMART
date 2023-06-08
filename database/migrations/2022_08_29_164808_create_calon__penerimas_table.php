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
        Schema::create('calon__penerimas', function (Blueprint $table) {
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->integer('k1');
            $table->integer('k2');
            $table->integer('k3');
            $table->integer('k4');
            $table->integer('k5');
            $table->integer('k6');
            $table->integer('k7');
            $table->integer('k8');
            $table->integer('k9');
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
        Schema::dropIfExists('calon__penerimas');
    }
};
