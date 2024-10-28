<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableGejala extends Migration
{
    public function up()
    {
        Schema::create('gejala', function (Blueprint $table) {
            $table->string('kode_gejala', 6)->primary();
            $table->string('nama_gejala',100);
            // $table->string('kategori',50);
            $table->text('deskripsi_gejala');
            $table->string('foto_gejala',100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gejala');
    }
}
