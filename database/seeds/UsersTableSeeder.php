<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = "Artem";
        $user->email = 'artem@gmx.de';
        $user->password = bcrypt('qweqweqwe');
        $user->save();
    }
}
