<?php

namespace App\Http\Controllers;

use App\Models\entreprise;
use Illuminate\Http\Request;

class SolsizerinstallateurController extends Controller
{
    public function affichageinstallateur()
    {
        return view('Solsizer.installateur', [
            'entreprises' => entreprise::all(),
            'pays' => entreprise::select('pays')->distinct()->pluck('pays')
        ]);
    }


}
