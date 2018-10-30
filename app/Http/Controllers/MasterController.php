<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function homeContent(){
        return view('frontEnd.home.home');
    }
    public function mensContent(){
        return view('frontEnd.mens.mens');
    }
    public function womensContent(){
        return view('frontEnd.womens.womens');
    }
    public function electronics(){
        return view('frontEnd.electronics.electronics');
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }
    public function singleProduct(){
        return view('frontEnd.products.singleProduct');
    }


}
