<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home() {
        
        $cars = ['pussy','anal','fuck'];
        return view('welcome')->with('cars',$cars);
    }
    
    public function about() {
        
        return view('pages.about');
    }
}
