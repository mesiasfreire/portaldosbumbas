<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'visitante',
            'email'=>'visitante@portaldosbumbas.com.br',
            'password'=>bcrypt('P0rt4l2018')
        ]);
    }
}
