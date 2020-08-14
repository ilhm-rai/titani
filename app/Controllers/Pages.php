<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data['title'] = "Home | Titani Indonesia";
		return view('Pages/home', $data);
	}
	public function test()
	{
		return view('welcome_message');
	}
	public function about()
	{
		$data['title'] = "Tentang | Titani Indonesia";
		return view('Pages/about', $data);
	}
}
