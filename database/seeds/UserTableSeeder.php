<?php

use App\User;
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
        User::create([
            'name' => 'Oleg',
            'email' => 'olehberlin@gmail.com',
            'password' => bcrypt('123456'),
            'role' => User::Role_Admin,
            'phone' => '098354423',
            'remember_token' => str_random(20),
        ]);
        User::create([
            'name' => 'Serhii K',
            'email' => 'serhiy@gmail.com',
            'password' => bcrypt('123456'),
            'role' => User::Role,
            'phone' => '0981234',
            'remember_token' => str_random(20),
        ]);

        factory(User::class,10)->create();
    }
}
