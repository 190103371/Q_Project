<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function search(Request $request){
        return view('search-results');
    }
}
