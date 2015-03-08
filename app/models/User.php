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

    public function projects()
    {
        return $this->belongsToMany('Project', 'project_users', 'user_id', 'project_id')->withPivot('accepted')->withTimestamps();
    }

    public function isAdmin()
    {
        return $this->attributes['role'] == 'admin';
    }

    public function isStudent()
    {
        return $this->attributes['role'] == 'student';
    }

    public function isResearcher()
    {
        return $this->attributes['role'] == 'researcher' || $this->attributes['role'] == 'admin';
    }

    public function isProfessor()
    {
        return $this->attributes['role'] == 'professor';
    }

    public function canViewUsers()
    {
        if($this->attributes['role'] == 'admin' || $this->attributes['role'] == 'researcher' || $this->attributes['role'] == 'professor')
        {
            return true;
        }

        return false;
    }

    public function canCreateProjects()
    {
        if ($this->attributes['role'] == 'admin' || $this->attributes['role'] == 'researcher') {
            return true;
        }
        return false;
    }



    public function canJoinProjects()
    {
        if ($this->attributes['role'] == 'student' || $this->attributes['role'] == 'admin') {
            return true;
        }
        return false;
    }

    public function canRecommend()
    {
        if ($this->attributes['role'] == 'professor' ) {
            return true;
        }
        return false;
    }

}