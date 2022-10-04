<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProdukMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_produk_masuk', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_transaksi', 150);
            $table -> char('kd_produk', 150);
            $table -> char('kd_supplier', 150);
            $table -> double('harga_pembelian');
            $table -> double('qt_pembelian');
            $table -> char('status_pembayaran', 20);
            $table -> dateTime('waktu_dibayar');
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
        Schema::dropIfExists('tbl_produk_masuk');
    }
}
