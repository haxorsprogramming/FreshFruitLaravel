<?php

namespace Database\Seeders;
use App\Models\M_User;
use Illuminate\Database\Seeder;

class S_User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> createUser("admin", "ADMIN", "admin", "Administrator");
        $this -> createUser("kasir", "KASIR", "admin", "Alfa Naninda");
        $this -> createUser("kasir2", "KASIR", "admin", "Rahma");
    }

    function createUser($username, $role, $password, $nama)
    {
        $user = new M_User();
        $user -> username = $username;
        $user -> password = password_hash($password, PASSWORD_DEFAULT);
        $user -> nama = $nama;
        $user -> role = $role;
        $user -> save();
    }

}