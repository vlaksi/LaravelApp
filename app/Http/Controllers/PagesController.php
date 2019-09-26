<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pocetna(){
        $naslov = 'Kulminacija znanja';
        return view('pages.pocetna')->with('title',$naslov);
    }

    public function about(){
        return view('pages.about');
    }

    public function materijali(){
        return view('pages.materijali');
    }
}
