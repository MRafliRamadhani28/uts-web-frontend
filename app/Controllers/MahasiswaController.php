<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $data['active'] = "mahasiswa";
        return view('mahasiswa/index', $data);
    }
}
