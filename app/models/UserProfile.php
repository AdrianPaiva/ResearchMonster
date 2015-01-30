<?php

class UserProfile extends Eloquent
{
    /**
     * Set timestamps off
     */
    public $timestamps = false;
    protected $table = "user_profiles";

    /*
    public function user()
    {
        return $this->belongsTo('User', 'userId','userId');
    }
    */
}