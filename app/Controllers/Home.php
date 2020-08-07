<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "Titani Indonesia";
		return view('Home/home', $data);
	}
	public function test()
	{
		return view('welcome_message');
	}
	public function about()
	{
		$data['title'] = "Tentang Titani";
		return view('Home/about', $data);
	}
	public function blog()
	{
		$data['title'] = "Blog Tani";
		return view('Home/blog', $data);
	}
}
