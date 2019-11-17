<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Artem";
        $user->email = 'artem@gmx.de';
        $user->password = bcrypt('qweqweqwe');
        $user->save();

        $user = new User();
        $user->name = "Wladimir";
        $user->email = 'wlad@gmx.de';
        $user->password = bcrypt('qweqweqwe');
        $user->save();

        $user = new User();
        $user->name = "Ivan";
        $user->email = 'ivan@gmx.de';
        $user->password = bcrypt('qweqweqwe');
        $user->save();
    }
}
