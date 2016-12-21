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
        $user = new User();
        $user->name = "Raj Shah";
        $user->email = "rpshah96@gmail.com";
        $user->password = bcrypt('tpo2017');
        $user->save();


        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('admin');
        $user->save();


        $user = new User();
        $user->name = "Badshah";
        $user->email = "rpshah_96@yahoo.com";
        $user->password = bcrypt('badshah');
        $user->save();
    }
}
