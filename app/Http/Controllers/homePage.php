<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homePage extends Controller
{
    public function homePage(){
        return view('home',['titolo'=>"ElectronicMagazine",'descrizione'=>"In questo blog si parlera' di tecnologia, si spaziera' tra computer gaming e telefonia."]);
    }
}
