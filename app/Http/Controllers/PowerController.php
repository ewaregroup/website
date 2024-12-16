<?php

namespace App\Http\Controllers;
use App\Models\irradiances;
use App\Models\solar;
use App\Models\batte;
use App\Services\PowercalculService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PowerController extends Controller
{

    public function power()
    {
        return view('Solsizer/power',[
            'irradiance' => irradiances::all(),
            'solar' => Solar::all(),
            'batterie' => batte::all()
            ]);

    }
    public function getCountryData(Request $request)
    {
        $isoCode = $request->input('iso');

        $countryData = Irradiances::where('iso', $isoCode)->first();

        if ($countryData) {
            return response()->json([
                'success' => true,
                'data' => $countryData
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Les données pour ce pays sont introuvables.'
            ]);
        }
    }

    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'nullable|numeric',
        ]);

        // Traitement des données (par ex., sauvegarde en base de données)
        return response()->json([
            'message' => 'Données validées avec succès.',
            'data' => $validated,
        ]);
    }

    public function FinanciereData(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'currency' => 'required|string',
            'budget_prevu' => 'required|string',
            'facture_payee' => 'required|numeric|min:0',
        ]);

        // Exemple de traitement des données
        $currency = $validatedData['currency'];
        $budgetPrevu = $validatedData['budget_prevu'];
        $facturePayee = $validatedData['facture_payee'];

        // Logique métier ou calculs
        $result = [
            'currency' => $currency,
            'budget' => $budgetPrevu,
            'facture' => $facturePayee,
            'message' => 'Données reçues avec succès.',
        ];

        // Retour d'une réponse JSON
        return response()->json([
            'success' => true,
            'data' => $validatedData,
        ]);

        }
}

