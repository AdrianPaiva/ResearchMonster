<?php

class ProjectTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('projects')->delete();
        $project1 = Project::create(array(


            'name' => 'project 1',
            'postedBy' => 'adrian',
            'summary' => "summary goes here",
            'experience' => 'exp'


        ));

        DB::table('users')->delete();

         User::create(array(

            'userId' => 123456789,
            'password' => Hash::make('awesome'),
            'email' => 'adrianpaiva1@gmail.com',
            'confirmed' => 1,
            'role' => 'admin'


        ));

        $user1 = User::create(array(

            'userId' => 12345678,
            'password' => Hash::make('awesome'),
            'email' => 'adrianpaiva@gmail.com',
            'confirmed' => 1,
            'role' => 'student'


        ));

        DB::table('user_profiles')->delete();
        UserProfile::create(array(

            'userId' => 123456789,
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


        $project1->users()->attach($user1->userId);


        // this is how you update pivot table fields during creation
        //$project1->users()->attach($user1->userId, array('accepted' => 1));

        // this how to modify after creation
        $project1->users()->updateExistingPivot($user1->userId, array('accepted' => 1));

    }

}