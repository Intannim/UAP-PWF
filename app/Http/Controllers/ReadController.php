<?php

namespace App\Http\Controllers;

use App\Models\Tb_dosen;
use App\Models\User;
use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function index()
    {
        $title = "Data";
        //$data = array('title' => 'Profil Dosen');
        $data = User::all();

        return view('dosen.profil', compact('data', 'title'));
    }
}
