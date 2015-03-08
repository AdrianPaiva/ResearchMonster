<?php

class UserProfile extends Eloquent
{
    /**
     * Set timestamps off
     */
    public $timestamps = false;
    protected $table = "user_profiles";
    protected $fillable = array('userId', 'firstName','lastName');
    protected $primaryKey = 'userId';

    public function user()
    {
        return $this->belongsTo('User', 'userId','userId');
    }

}