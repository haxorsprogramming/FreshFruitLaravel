<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_supplier', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_supplier', 150);
            $table -> char('nama_supplier', 200);
            $table -> char('no_hp', 200);
            $table -> text('alamat');
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
        Schema::dropIfExists('tbl_supplier');
    }
}
