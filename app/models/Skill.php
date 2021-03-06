<?php

class Skill extends Eloquent {

	protected $table = 'skills'; // the name of the table in the database

    /*
    public function users()
    {
        return $this->belongsToMany('User', 'user_skills', 'user_id', 'skill_id')->withTimestamps();
    }
    */
    public function projects()
    {
        return $this->belongsToMany('Project', 'project_skills', 'project_id', 'skill_id')->withTimestamps();
    }


}
