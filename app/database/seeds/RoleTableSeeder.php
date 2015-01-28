<?php

class RoleTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('roles')->delete();
        Role::create(array(

        'id' => 1,
        'name' => 'Researcher'
    ));
        Role::create(array(

            'id' => 2,
            'name' => 'Faculty'
        ));
        Role::create(array(

            'id' => 3,
            'name' => 'Student'
        ));

    }

}