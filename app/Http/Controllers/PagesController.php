<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function add_farm(){
        return view('agri_system.add_farm');
    }

    public function home(){
        return view('agri_system.home');
    }

    public function index(){
        return view('agri_website.index');
    }
}
