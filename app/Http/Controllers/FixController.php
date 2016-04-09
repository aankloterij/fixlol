<?php

namespace App\Http\Controllers;


class FixController extends Controller
{
	public function __construct()
	{
		$this->user = \Auth::user();
	}

	public function fix(Request $request)
	{
		return view('home')->withFeed($this->getFeed(array_keys($request->except('_search'))));
	}

	public function getFeed($catagories)
	{
		$mention = '@' . $this->user->username;

		$query = Fix::query();

		if ($request->_search) $query->where('body', 'like', "%$request->_search%");

		if ($catagories)
		{
			$query->where(function ()
			{
				for ($catagories as $catagory)
				{
					$query->orWhere('tags', 'like', "%$catagory%");
				}
			});
		}

		$query->orWhere('body', 'like', $mention);

		return $query->recent()->get();
	}
}
