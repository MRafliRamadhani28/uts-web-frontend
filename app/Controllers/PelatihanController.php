<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PelatihanController extends BaseController
{
    public function index()
    {
        $data['active'] = "course";
        $profiles = [
            [
                "title" => "Belajar Gitar",
                "author" => "Bel"
            ],
            [
                "title" => "Belajar Web",
                "author" => "Bel"
            ],
            [
                "title" => "Belajar Laptop",
                "author" => "Bel"
            ],
        ];
        return view('course/index', $data, $profiles);
    }
}
