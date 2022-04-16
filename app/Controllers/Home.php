<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['active'] = "home";
        return view('home/index', $data);
    }

    public function mahasiswa()
    {
        $data['active'] = "mahasiswa";
        return view('home/index', $data);
    }

    public function course()
    {
        $data['active'] = "course";
        return view('home/index', $data);
    }
}
