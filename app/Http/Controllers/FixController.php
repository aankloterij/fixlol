<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fix;
use App\User;


class FixController extends Controller
{
	public function __construct()
	{
		$this->user = \Auth::user();
	}

	public function fix(Request $request)
	{
		return view('dashboard')->withFeed($this->getFeed(array_keys($request->except('_search')), $request->_search));
	}

	public function test()
	{

	}

	public function profile(User $user = null)
	{
		$user = $user ? $user : \Auth::user();

		return view('profile')->withUser($user);
	}

	public function catagory($catagory)
	{
		return view('dashboard')->withFeed(Fix::with('user')->where('body', 'like', "%$catagory%")->get());
	}

	public function getFeed(array $catagories, $search)
	{
		$mention = '@' . $this->user->username;

		$query = Fix::query();

		$query->where(function () use ($catagories, $search, $query, $mention)
		{
			if (count($catagories))
			{
				foreach ($catagories as $catagory)
				{
					$query->orWhere('tags', 'like', "%$catagory%");
				}
			}

			$query->orWhere('body', 'like', "%$mention%");
		});

		if ($search) $query->where('body', 'like', "%$search%");

		$query->orderBy('created_at', 'desc')->with('user');

		// return $query->get();
		return Fix::all();

	}

	public function createFeed(Request $request){
		$data = $request->only('postsubmit');

		\Fix::create([
			'subject' => strrand(),
			'body' => $data
		]);

		return redirect('/');
	}
}
