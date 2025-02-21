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
        Schema::create('penyakit', function (Blueprint $table) {
            $table->string('kode_penyakit',6)->primary();
            $table->string('nama_penyakit',50);
            $table->text('deskripsi');
            $table->string('foto_penyakit',25);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penyakit');
    }
};
