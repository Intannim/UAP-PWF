<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
       $data = array('title' => 'profil');
        return view('dosen.profil', $data);
    }

    public function index2()
    {
       $data = array('title' => 'data_pengampu');
        return view('dosen.pengampu', $data);
    }
}
