<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "Titani Indonesia";
		return view('home', $data);
	}
}
