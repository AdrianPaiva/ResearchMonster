<?php

class UserProfileTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('user_profiles')->delete();
        UserProfile::create(array(

            'userId'    => 123456789,
            'program' => 'test program name',
            'firstName' => 'test first name',
            'lastName' => 'test last name'

        ));
        UserProfile::create(array(

            'userId' => 12345678,
            'program' => 'program',
            'firstName' => 'Adrian',
            'lastName' => 'is cool'

        ));




    }

}