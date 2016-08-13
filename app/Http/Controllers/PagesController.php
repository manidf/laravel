<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
	public function home()
	{
			$people = ['John', 'Jenny', 'Joey'];
			// return view('welcome', compact('people'));
			return view('welcome')->with(['people' => $people]);
	}

	public function about()
	{
		return view('about');
	}
}
