<?php

use App\Models\User;
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
        User::create([
            "name"=>"Admin",
            "email"=>"gmoney@tameinitiative.com",
            "password"=>bcrypt("pwd_admin"),
        ]);
    }
}
