<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
	public $timestamps = false;

	/**
	*	gets all checks of the current date
	*/
	public static function allchecks()
	{
		return Checkin::orderBy('checkin', 'asc')->get();
	}

	/**
	*	gets all checks of the current user
	*	clicked by name.
	*/
    public static function mychecks($name)
    {
    	return static::where('name', $name)->orderBy('checkin', 'asc')->get();
    }
}
