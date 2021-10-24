<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages/index');
    }

    public function database()
    {
        return view('pages/database');
    }

    public function discreteMath()
    {
        return view('pages/discrete-math');
    }

    public function softwareEng()
    {
        return view('pages/software-eng');
    }
}
