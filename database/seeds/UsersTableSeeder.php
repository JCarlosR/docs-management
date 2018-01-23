<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $superadmin = User::create([
            'name' => 'Juan Carlos',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('superadmin'),
            'role' => 0
        ]);

        $a1 = User::create(['name' => 'administrador1', 'email' => 'admin1@gmail.com', 'password' => bcrypt('123123'), 'role' => 1]);
        $a2 = User::create(['name' => 'administrador2', 'email' => 'admin2@gmail.com', 'password' => bcrypt('123123'), 'role' => 1]);
        $a3 = User::create(['name' => 'administrador3', 'email' => 'admin3@gmail.com', 'password' => bcrypt('123123'), 'role' => 1]);
        $a4 = User::create(['name' => 'administrador4', 'email' => 'admin4@gmail.com', 'password' => bcrypt('123123'), 'role' => 1]);
        $a5 = User::create(['name' => 'administrador5', 'email' => 'admin5@gmail.com', 'password' => bcrypt('123123'), 'role' => 1]);
        $a6 = User::create(['name' => 'administrador6', 'email' => 'admin6@gmail.com', 'password' => bcrypt('123123'), 'role' => 1]);
        $a7 = User::create(['name' => 'administrador7', 'email' => 'admin7@gmail.com', 'password' => bcrypt('123123'), 'role' => 1]);
        $a8 = User::create(['name' => 'administrador8', 'email' => 'admin8@gmail.com', 'password' => bcrypt('123123'), 'role' => 1]);
        $a9 = User::create(['name' => 'administrador9', 'email' => 'admin9@gmail.com', 'password' => bcrypt('123123'), 'role' => 1]);

    }
}
