<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected $table = "users";

    protected $hidden = array('password', 'remember_token');

    public function roles()
    {
        return $this->hasOne('Role', 'roles');
    }

    public function hasRole($check)
    {
        $roles_id = array_fetch(Role::all()->toArray(), 'id');
        $roles_name = array_fetch(Role::all()->toArray(), 'name');

        $roles = array_combine ( $roles_id , $roles_name );
        return in_array($check, $roles, 'name');
    }
}