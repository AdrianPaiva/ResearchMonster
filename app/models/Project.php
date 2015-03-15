<?php

class Project extends Eloquent {

	protected $table = 'projects'; // the name of the table in the database


    public function users() //project members
    {
        return $this->belongsToMany('User', 'project_users', 'project_id','user_id')->withPivot('accepted')->withTimestamps();
    }

    public function recommendedUsers()
    {
        return $this->belongsToMany('User', 'project_recommended_users', 'project_id', 'user_id')->withTimestamps();
    }


    public function user() //project owner
    {
        return $this->hasOne('User', 'userId', 'userId');
    }

    public function notifications()
    {
        return $this->hasMany('Notification', 'project_id', 'id');
    }


    public function skills()
    {
        return $this->belongsToMany('Skill', 'project_skills', 'project_id', 'skill_id')->withTimestamps();
    }




}
