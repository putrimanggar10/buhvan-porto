<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function lebihLanjut()
    {
        return view("lebih_lanjut");
    }

    public function contactUs()
    {
        return view("contact_us");
    }

     public function pricing()
    {
        return view("pricing");
    }
}
