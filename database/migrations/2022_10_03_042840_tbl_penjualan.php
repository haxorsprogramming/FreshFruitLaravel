<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_penjualan', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_penjualan', 150);
            $table -> char('kd_buah', 200);
            $table -> double('qt');
            $table -> double('harga_at');
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
        Schema::dropIfExists('tbl_penjualan');
    }
}
