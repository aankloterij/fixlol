<?php

namespace App;

class Fix extends \Eloquent
{
	protected $fillable = [
		'subject', 'body', 'tags'
	];

	public function setBodyAttribute($value)
	{
		$this->attributes['body'] = e($value);

		preg_match('/#([a-zA-Z-_][a-zA-Z0-9-_]*)/', $value, $tags);

		array_shift($tags);

		array_map(function ($value) {
			return e($value);
		}, $value);

		$this->attirbutes['tags'] = implode('|', $tags);
	}

	public function user()
	{
		return $this->hasOne(User::class, 'id', 'user_id');
	}
}
