<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //firstly, create a "super-admin"
        $user = new User;
        $user->id = 1;
        $user->username = "root";
        $user->email = "admin@mail.id";
        $user->email_verified_at = now();
        $user->password = \Hash::make(123456);
        $user->remember_token = Str::random(10);
        $user->role = "admin";
        $user->save();
    }
}
