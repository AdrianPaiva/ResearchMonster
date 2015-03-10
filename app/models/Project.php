<?php

class Project extends Eloquent {

	protected $table = 'projects'; // the name of the table in the database


    public function users() //project members
    {
        return $this->belongsToMany('User', 'project_users', 'project_id','user_id')->withPivot('accepted')->withTimestamps();
    }

    public function user() //project owner
    {
        return $this->hasOne('User', 'userId', 'userId');
    }

    public function notifications()
    {
        return $this->hasMany('Notification', 'project_id', 'id');
    }




}
