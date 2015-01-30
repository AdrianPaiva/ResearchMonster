<?php

class UserProfileTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('user_profiles')->delete();
        UserProfile::create(array(

            'userId'    => 123456789,
            'email' => 'email@email.com',
            'program' => 'test program name',
            'firstName' => 'test first name',
            'lastName' => 'test last name'

        ));




    }

}