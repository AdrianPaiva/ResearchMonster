<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected $table = "users";
    protected $primaryKey = 'userId';
    protected $fillable = array('userId', 'password','email','confirmed','confirmation_code');
    protected $hidden = array('password', 'remember_token', 'role');

    public function profile()
    {
        return $this->hasOne('UserProfile', 'userId','userId');
    }

    public function isAdmin()
    {
        return $this->attributes['role'] == 'admin';
    }

    public function isUser()
    {
        return $this->attributes['role'] == 'user';
    }
    public function isResearcher()
    {
        return $this->attributes['role'] == 'researcher';
    }


}