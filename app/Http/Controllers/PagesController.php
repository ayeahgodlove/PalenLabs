<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    public function labTests()
    {
        return view('lab-tests');
    }

    public function labServices(): View
    {
        return view('lab-services');
    }
}
