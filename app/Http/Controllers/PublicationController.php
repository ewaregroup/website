<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller{
    //
    public function publication()
    {
        return view('publication/publication');
    }

}
