<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolsizerController extends Controller
{

    public function solsizer()
    {
        return view('Solsizer/menusolsizer');
    }

    public function index()
    {
        return view('Solsizer/menu');
    }



}
