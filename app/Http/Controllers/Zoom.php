<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Zoom extends Controller
{
    // Zoom redirect
   public function zoomredirect(){
        return view('zoomredirect');
    }
}
