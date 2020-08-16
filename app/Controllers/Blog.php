<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data['title'] = "Blog Tani | Titani Indonesia";
        return view('blog/index', $data);
    }
}
