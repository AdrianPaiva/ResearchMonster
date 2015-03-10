<?php

class Notification extends Eloquent {

	protected $table = 'notifications'; // the name of the table in the database


    public function user()
    {
        return $this->belongsTo('User', 'userId', 'userId');
    }

    public function project()
    {
        return $this->belongsTo('Project', 'project_id', 'id');
    }





}
