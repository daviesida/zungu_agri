<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Start Routes to website
    public function index(){
        return view('agri_website.index');
    }

    // End Routes to website

    // Start Routes to System
    public function add_farm(){
        return view('agri_system.add_farm');
    }

    public function home(){
        return view('agri_system.home');
    }

    public function add_crop(){
        return view('agri_system.add_crop');
    }

    public function add_crop_pesticide(){
        return view('agri_system.add_pesticide');
    }

    public function add_crop_pests(){
        return view('agri_system.add_pest');
    }

    public function add_seed(){
        return view('agri_system.add_seed');
    }

    // End Routes to System
    
}