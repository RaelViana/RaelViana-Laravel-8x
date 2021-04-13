<?php

use App\models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::created([
            'name' => 'Carlos Ferreira',
            'email' => 'carlos@especializati.com.br',
            'password' => bcrypt('123456'),   // 'bcrypt' faz a   criptografia do password
        ]);
    }
}
