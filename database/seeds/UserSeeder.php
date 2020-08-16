<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // INSERT INTO users VALUES()
        $user = new User();
        $user->name = "rithipoom ariyajon";
        $user->email = "goldcyber.fenz@gmail.com";
        $user->password = bcrypt("123456");
        $user->save();
    }

}
