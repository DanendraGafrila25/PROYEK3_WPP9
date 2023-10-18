<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function Danendra()
    {
        return view('danendra');
    }

    public function Fahrizal()
    {
        return view('fahrizal');
    }

    public function Faras()
    {
        return view('faras');
    }

    public function CurriculumVitaes()
    {
        return view('CurriculumVitaes');
    }

    public function MyCV()
    {
        return view('MyCV');
    }

}
