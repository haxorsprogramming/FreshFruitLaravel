<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_User extends Model
{
    protected $table = "tbl_user";
    protected $fillable = [
        'username',
        'password',
        'nama',
        'role',
        'api_token'
    ];
}
