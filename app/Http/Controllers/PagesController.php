<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pocetna(){
        return view('pages.pocetna');
    }

    public function about(){
        return view('pages.about');
    }

    public function materijali(){
        return view('pages.materijali');
    }
}
