<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        DB::table('user_profiles')->delete();

        User::create(array(
            'userId' => 123456789,
            'password' => Hash::make('awesome'),
            'email' => 'adrianpaiva1@gmail.com',
            'confirmed' => 1,
            'role' => 'admin'
        ));
        UserProfile::create(array(

            'userId' => 123456789,
            'firstName' => 'Adrian',
            'lastName' => 'Paiva'
        ));

        User::create(array(
            'userId' => 12345678,
            'password' => Hash::make('awesome'),
            'email' => 'adra1@gmail.com',
            'confirmed' => 1,
            'role' => 'researcher'
        ));
        UserProfile::create(array(

            'userId' => 12345678,
            'firstName' => 'Adrian',
            'lastName' => 'Researcher'
        ));

        User::create(array(
            'userId' => 123456788,
            'password' => Hash::make('awesome'),
            'email' => 'adria@gmail.com',
            'confirmed' => 1,
            'role' => 'professor'
        ));
        UserProfile::create(array(

            'userId' => 123456788,
            'firstName' => 'Adrian',
            'lastName' => 'Professor'
        ));

        User::create(array(
            'userId' => 12345677,
            'password' => Hash::make('awesome'),
            'email' => 'adriaa1@gmail.com',
            'confirmed' => 1,
            'role' => 'student'
        ));
        UserProfile::create(array(

            'userId' => 12345677,
            'firstName' => 'Adrian',
            'lastName' => 'Student'
        ));

        User::create(array(
            'userId' => 12345666,
            'password' => Hash::make('awesome'),
            'email' => 'adria1@gmail.com',
            'confirmed' => 1,
            'role' => 'student'
        ));
        UserProfile::create(array(

            'userId' => 12345666,
            'firstName' => 'Patrick',
            'lastName' => 'student'
        ));
        User::create(array(
            'userId' => 12345644,
            'password' => Hash::make('awesome'),
            'email' => 'ad@gmail.com',
            'confirmed' => 1,
            'role' => 'student'
        ));
        UserProfile::create(array(

            'userId' => 12345644,
            'firstName' => 'Laurence',
            'lastName' => 'elbo'
        ));

        User::create(array(
            'userId' => 12345645,
            'password' => Hash::make('awesome'),
            'email' => 'aaaaad@gmail.com',
            'confirmed' => 1,
            'role' => 'student'
        ));
        UserProfile::create(array(

            'userId' => 12345645,
            'firstName' => 'Jimi',
            'lastName' => 'Hendrix'
        ));

        User::create(array(
            'userId' => 12345643,
            'password' => Hash::make('awesome'),
            'email' => 'aaaaabbbd@gmail.com',
            'confirmed' => 1,
            'role' => 'student'
        ));
        UserProfile::create(array(

            'userId' => 12345643,
            'firstName' => 'Jimmy',
            'lastName' => 'Page'
        ));

        User::create(array(
            'userId' => 12345642,
            'password' => Hash::make('awesome'),
            'email' => 'aaaabbad@gmail.com',
            'confirmed' => 1,
            'role' => 'student'
        ));
        UserProfile::create(array(

            'userId' => 12345642,
            'firstName' => 'Duane',
            'lastName' => 'Allman'
        ));







    }

}