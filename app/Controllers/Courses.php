<?php

namespace App\Controllers;

class Courses extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tanam Ilmu | Titani Indonesia'
        ];
        return view('courses/index', $data);
    }

    public function progress()
    {
        $data = [
            'title' => 'Titani Indonesia'
        ];

        return view('courses/progress', $data);
    }
}
