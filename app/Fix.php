<?php

namespace App;

class Fix extends \Eloquent
{
	protected $table = 'fix';

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
		}, $tags);

		$this->attributes['tags'] = implode('|', $tags);
	}

	public function getBodyAttribute()
	{
		$attr = e($this->attributes['body']);

		// mentions
		$attr = preg_replace_callback('/@([a-zA-Z0-9-_]+)/', function ($matches)
		{
			return sprintf('<a class="mention" href="%s">%s</a>', url()->route('profile', $matches[1]), $matches[0]);
		}, $attr);

		$attr = preg_replace_callback('/#([a-zA-Z][a-zA-Z0-9_-]*)/', function ($matches)
		{
			return sprintf('<a class="catagory" href="%s">%s</a>', url()->route('catagory', $matches[1]), $matches[0]);
		}, $attr);

		return $attr;
	}

	public function user()
	{
		return $this->hasOne(User::class, 'id', 'user_id');
	}
}
