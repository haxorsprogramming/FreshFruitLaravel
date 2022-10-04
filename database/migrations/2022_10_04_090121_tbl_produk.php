<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_produk', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_produk', 150);
            $table -> char('nama_produk', 200);
            $table -> text('alamat');
            $table -> char('kategori', 200);
            $table -> char('satuan', 200);
            $table -> double('harga');
            $table -> double('stock');
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
        Schema::dropIfExists('tbl_produk');
    }
}
