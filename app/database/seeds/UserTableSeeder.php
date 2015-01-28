<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(

            'userId'    => 123456789,
            'password' => Hash::make('awesome'),
            'role_id' => 1
        ));
    }

}