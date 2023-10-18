<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.addCV.index');
    }

    public function CurriculumVitaes()
    {
        return view('CurriculumVitaes');
    }

    public function MyCV()
    {
        return view('index');
    }

}
