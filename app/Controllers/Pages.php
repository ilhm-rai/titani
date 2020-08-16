<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data['title'] = "Home | Titani Indonesia";
		return view('pages/home', $data);
	}
	public function test()
	{
		return view('welcome_message');
	}
	public function about()
	{
		$data['title'] = "Tentang | Titani Indonesia";
		return view('pages/about', $data);
<<<<<<< HEAD
=======
	}
	public function blog()
	{
		$data['title'] = "Blog Tani | Titani Indonesia";
		return view('pages/blog', $data);
>>>>>>> 478eaf54c662bdc1da14da1cb4c9f1eb81088bf6
	}
}
