<?php

namespace App;

class Location extends \Eloquent
{
	protected $fillable = ['name'];

	public function fix()
	{
		return $this->hasMany(Fix::class, 'location_id', 'id');
	}
}
