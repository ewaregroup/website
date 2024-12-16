<?php
namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SolsizerentrepriseController extends Controller
{
    public function affichageentreprise()
    {
        return view('Solsizer/entreprise');
    }

    public function enregistrerentreprise(Request $request)
    {
        if ($request->isMethod("post")) {

            $validator = Validator::make($request->all(), [
                'nom' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
                'annee' => 'required|date',
                'nombreProjets' => 'required|integer|min:0',
                'ingenieur' => 'required|integer|min:0',
                'registre' => 'required|integer|min:0',
                'adresse' => 'required|string|max:255',
                'immatriculation' => 'required|integer',
                'capital' => 'required|string|max:255|unique:entreprises,email',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'email' => 'required|email|max:255',
                'logo' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'document' => 'required|file|mimes:pdf,doc,docx|max:2048',
                'documents' => 'required|file|mimes:pdf,doc,docx|max:2048',
                'domaine' => 'required|string|max:255',
                'pays' => 'required|string|max:255'
            ],
            [
                'nom.required' => 'Le nom de l\'entreprise est requis.',
                'nom.string' => 'Le nom de l\'entreprise doit être une chaîne de caractères.',
                'nom.max' => 'Le nom de l\'entreprise ne doit pas dépasser 255 caractères.',
                'nom.regex' => 'Le nom de l\'entreprise ne peut contenir que des lettres et des espaces.',

                'annee.required' => 'L\'année de création est requise.',
                'annee.date' => 'L\'année de création doit être une date valide.',

                'nombreProjets.required' => 'Le nombre de projets est requis.',
                'nombreProjets.integer' => 'Le nombre de projets doit être un nombre entier.',
                'nombreProjets.min' => 'Le nombre de projets doit être au moins 0.',

                'ingenieur.required' => 'Le nombre d\'ingénieurs est requis.',
                'ingenieur.integer' => 'Le nombre d\'ingénieurs doit être un nombre entier.',
                'ingenieur.min' => 'Le nombre d\'ingénieurs doit être au moins 0.',

                'registre.required' => 'Le registre de commerce est requis.',
                'registre.integer' => 'Le registre de commerce doit être un nombre entier.',
                'registre.min' => 'Le registre de commerce doit être au moins 0.',

                'adresse.required' => 'L\'adresse de l\'entreprise est requise.',
                'adresse.string' => 'L\'adresse de l\'entreprise doit être une chaîne de caractères.',
                'adresse.max' => 'L\'adresse de l\'entreprise ne doit pas dépasser 255 caractères.',

                'immatriculation.required' => 'Le numéro d\'immatriculation fiscale (NIF) est requis.',
                'immatriculation.integer' => 'Le numéro d\'immatriculation fiscale (NIF) doit être un nombre entier.',
                'immatriculation.min' => 'Le numéro d\'immatriculation fiscale (NIF) doit être au moins 0.',

                'capital.required' => 'Le capital de l\'entreprise est requis.',
                'capital.string' => 'Le capital de l\'entreprise doit être une chaîne de caractères.',
                'capital.max' => 'Le capital de l\'entreprise ne doit pas dépasser 255 caractères.',

                'phone.required' => 'Le numéro de téléphone est requis.',
                'phone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
                'phone.max' => 'Le numéro de téléphone ne doit pas dépasser 20 caractères.',

                'email.required' => 'L\'adresse email est requise.',
                'email.email' => 'L\'adresse email doit être valide.',
                'email.unique' => 'Cette adresse email est déjà utilisée.',
                'email.max' => 'L\'adresse email ne doit pas dépasser 255 caractères.',

                'logo.required' => 'Le logo de l\'entreprise est requis.',
                'logo.file' => 'Le logo doit être un fichier.',
                'logo.mimes' => 'Le logo doit être au format jpeg, png, jpg, gif ou svg.',
                'logo.max' => 'Le logo ne doit pas dépasser 2048 kilo-octets.',

                'document.required' => 'Le document justificatif du personnel est requis.',
                'document.file' => 'Le document justificatif du personnel doit être un fichier.',
                'document.mimes' => 'Le document justificatif du personnel doit être au format pdf, doc ou docx.',
                'document.max' => 'Le document justificatif du personnel ne doit pas dépasser 2048 kilo-octets.',

                'documents.required' => 'Les documents justificatifs de l’existence de l’entreprise sont requis.',
                'documents.file' => 'Les documents justificatifs de l’existence de l’entreprise doivent être un fichier.',
                'documents.mimes' => 'Les documents justificatifs de l’existence de l’entreprise doivent être au format pdf, doc ou docx.',
                'documents.max' => 'Les documents justificatifs de l’existence de l’entreprise ne doivent pas dépasser 2048 kilo-octets.',

                'domaine.required' => 'Le domaine d\'activité est requis.',
                'domaine.string' => 'Le domaine d\'activité doit être une chaîne de caractères.',
                'domaine.max' => 'Le domaine d\'activité ne doit pas dépasser 255 caractères.',

                'pays.required' => 'Le pays est requis.',
                'pays.string' => 'Le pays doit être une chaîne de caractères.',
                'pays.max' => 'Le pays ne doit pas dépasser 255 caractères.'
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            // Handle file uploads
            $logoPath = $request->file('logo')->store('logos', 'public');
            $documentPath = $request->file('document')->store('documents', 'public');
            $documentsPath = $request->file('documents')->store('documents', 'public');


            // Save data in the database
            try {
            $entreprise = new Entreprise();
            $entreprise->nom = $request->nom;
            $entreprise->annee = $request->annee;
            $entreprise->adresse = $request->adresse;
            $entreprise->nombreProjets = $request->nombreProjets;
            $entreprise->ingenieur = $request->ingenieur;
            $entreprise->registre = $request->registre;
            $entreprise->immatriculation = $request->immatriculation;
            $entreprise->phone = $request->phone;
            $entreprise->email = $request->email;
            $entreprise->domaine = $request->domaine;
            $entreprise->capital = $request->capital;
            $entreprise->pays = $request->pays;
            $entreprise->logo = $logoPath;
            $entreprise->document = $documentPath;
            $entreprise->documents = $documentsPath;
            $entreprise->user_id = Auth::id();
            $entreprise->save();

            return redirect('/dashboard')->with('success', 'Information enregister');
            } catch (\Exception $e) {
                return back()->with('error', 'An error occurred while uploading files and data.');
            }
        }

        return view('Solsizer/entreprise');
    }

    public function index()
    {
        return view('Admin.indexentreprise', [
            'entreprises' => Entreprise::all()
        ]);
    }


    public function entreprise_edit(Request $request, $id)
    {
        // Récupérer l'entreprise à modifier
        $entreprise = Entreprise::find($id);

        if (!$entreprise) {
            return redirect('/dashboard')->with('error', 'Entreprise non trouvée.');
        }

        if ($request->isMethod("post")) {

            // Validation des données entrantes
            $validator = Validator::make($request->all(), [
                'nom' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
                'annee' => 'required|date',
                'nombreProjets' => 'required|integer|min:0',
                'ingenieur' => 'required|integer|min:0',
                'registre' => 'required|integer|min:0',
                'adresse' => 'required|string|max:255',
                'immatriculation' => 'required|integer',
                'capital' => 'required|string|max:255|unique:entreprises,capital,' . $entreprise->id,
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'email' => 'required|email|max:255',
                'logo' => 'sometimes|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'document' => 'sometimes|file|mimes:pdf,doc,docx|max:2048',
                'documents' => 'sometimes|file|mimes:pdf,doc,docx|max:2048',
                'domaine' => 'required|string|max:255',
                'pays' => 'required|string|max:255'
            ], [
                // Messages de validation personnalisés
                // (vous pouvez utiliser les mêmes que ceux de la méthode enregistrerentreprise)
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            // Gestion des fichiers uploadés
            if ($request->hasFile('logo')) {
                // Supprimer l'ancien fichier si nécessaire
                if ($entreprise->logo) {
                    Storage::disk('public')->delete($entreprise->logo);
                }
                $entreprise->logo = $request->file('logo')->store('logos', 'public');
            }

            if ($request->hasFile('document')) {
                // Supprimer l'ancien fichier si nécessaire
                if ($entreprise->document) {
                    Storage::disk('public')->delete($entreprise->document);
                }
                $entreprise->document = $request->file('document')->store('documents', 'public');
            }

            if ($request->hasFile('documents')) {
                // Supprimer l'ancien fichier si nécessaire
                if ($entreprise->documents) {
                    Storage::disk('public')->delete($entreprise->documents);
                }
                $entreprise->documents = $request->file('documents')->store('documents', 'public');
            }

            // Mise à jour des informations de l'entreprise
            $entreprise->nom = $request->nom;
            $entreprise->annee = $request->annee;
            $entreprise->adresse = $request->adresse;
            $entreprise->nombreProjets = $request->nombreProjets;
            $entreprise->ingenieur = $request->ingenieur;
            $entreprise->registre = $request->registre;
            $entreprise->immatriculation = $request->immatriculation;
            $entreprise->phone = $request->phone;
            $entreprise->email = $request->email;
            $entreprise->domaine = $request->domaine;
            $entreprise->capital = $request->capital;
            $entreprise->pays = $request->pays;

            try {
                $entreprise->save();
                return redirect('/dashboard')->with('success', 'Information mise à jour avec succès.');
            } catch (\Exception $e) {
                return back()->with('error', 'Une erreur est survenue lors de la mise à jour des informations.');
            }
        }

        return view('Solsizer/modifier_entreprise',[
            'entreprise' => $entreprise
        ]);
    }



}



































//
//namespace App\Http\Controllers;
//use App\Models\entreprise;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;
//
//class SolsizerentrepriseController extends Controller
//{
//    public function affichageentreprise()
//    {
//        return view('Solsizer/entreprise');
//    }
//
//    public function enregistrerentreprise( Request $request)
//    {
//        if ($request->isMethod("post")) {
//
//            $validator = Validator::make($request->all(),([
//                'nom' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
//                'annee' => 'required|date',
//                'nombreProjets' => 'required|integer|min:0',
//                'ingenieur' => 'required|integer|min:0',
//                'registre' => 'required|integer',
//                'adresse' => 'required|string',
//                'immatriculation' => 'required|integer',
//                'capital' => 'required|string|max:255',
//                'phone' => 'required|string|max:20',
//                'email' => 'required|email|max:255',
//                'logo' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
//                'document' => 'required|file|mimes:pdf,doc,docx|max:2048',
//                'documents' => 'required|file|mimes:pdf,doc,docx|max:2048',
//                'domaine' => 'required|string',
//                'pays' => 'required|string'
//            ]);
//
//            if ($validator->fails()) {
//                return back()->withErrors($validator)->withInput();
//            }
//
//            // Handle file uploads
//            $logoPath = $request->file('logo')->store('logos', 'public');
//            $documentPath = $request->file('document')->store('documents', 'public');
//            $documentsPath = $request->file('documents')->store('documents', 'public');
//
//            // Save data in the database
//            $entreprise = new Entreprise();
//            $entreprise->nom = $request->nom;
//            $entreprise->annee = $request->annee;
//            $entreprise->adresse = $request->adresse;
//            $entreprise->nombreProjets = $request->nombreProjets;
//            $entreprise->ingenieur = $request->ingenieur;
//            $entreprise->registre = $request->registre;
//            $entreprise->immatriculation = $request->immatriculation;
//            $entreprise->phone = $request->phone;
//            $entreprise->email = $request->email;
//            $entreprise->domaine = $request->domaine;
//            $entreprise->capital = $request->capital;
//            $entreprise->pays = $request->pays;
//            $entreprise->logo = $logoPath;
//            $entreprise->document = $documentPath;
//            $entreprise->documents = $documentsPath;
//            $entreprise->save();
//
//            return redirect('/entreprises')->with('success', 'Files and data uploaded successfully');
//
//        }
//        return view('solsizer/entreprise', []);
//
//        }
//
//    public function index() {
//        return view('Admin.indexentreprise', [
//            'entreprises' => entreprise::all()
//        ]);
//    }
//}
//
//
//
