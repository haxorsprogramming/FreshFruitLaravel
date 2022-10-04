<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBuah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_buah', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_buah', 150);
            $table -> char('nama_buah', 200);
            $table -> text('deksripsi');
            $table -> double('harga');
            $table -> double('stock');
            $table -> char('satuan', 30);
            $table -> timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_buah');
    }
}
