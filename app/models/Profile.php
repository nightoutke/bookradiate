<?php

class Profile extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'school' => 'required',
		'terms' => 'required'
	);
}