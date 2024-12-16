<?php

namespace App\Http\Controllers;

use App\Models\Suscribe;
use Illuminate\Http\Request;

class SuscribeController extends Controller
{
    public function index(Request $request) {

        return view('Admin.indexsuscribe', [
            'suscribes' => Suscribe::all()
        ]);
    }

    public function suscribeadd(Request $request){

        if ($request->isMethod("post")){

            $request->validate([
                'email' => 'required'
            ]);

            $suscribe = new Suscribe();
            $suscribe -> email = $request->email;
            $suscribe -> save();

            return redirect('/')->with('success', 'Vous êtes abonné à notre newsletter!');

        }

        return view('accueil.welcome', []);
    }
}
