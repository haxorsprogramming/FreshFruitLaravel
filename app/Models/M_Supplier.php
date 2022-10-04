<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Supplier extends Model
{
    protected $table = "tbl_supplier";
    protected $fillable = [
        'kd_supplier',
        'nama_supplier',
        'no_hp',
        'alamat'
    ];
}
