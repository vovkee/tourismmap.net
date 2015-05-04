<?php

class Profile extends Eloquent {

    protected $table = 'profile';
    protected $fillable = array('user_id', 'about');
    protected $primaryKey = 'user_id';

    public function getUser()
    {
        return $this->belongsTo('User', 'user_id');
    }
}