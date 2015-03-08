<?php

class Project extends Eloquent {

	protected $table = 'projects'; // the name of the table in the database

    public function users()
    {
        return $this->belongsToMany('User', 'project_users', 'project_id','user_id')->withPivot('accepted')->withTimestamps();
    }





}
