<?php

class Visiter extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'password' => 'required'
	);
}