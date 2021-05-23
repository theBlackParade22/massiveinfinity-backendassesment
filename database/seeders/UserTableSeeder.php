<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'admin',
        'username' => 'admin@admin.com',
        'email'    => 'admin@admin.com',
        'password' => Hash::make('password'),
    ));
}

}