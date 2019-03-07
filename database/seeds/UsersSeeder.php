<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = App\User::create ([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123123123')
            ]);

        $admin->assignRole('admin');
    }
}
