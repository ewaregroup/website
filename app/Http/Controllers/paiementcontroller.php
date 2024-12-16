<?php



namespace App\Http\Controllers;

use App\Helpers\CinetPay;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Helpers\marchand;
class paiementcontroller extends Controller
{


    public function paiement()
    {
        return view('paiement');
    }
    public function paimentinit(Request $request){

        if ($request->has('valider')) {
            // Récupérer les données du formulaire
            $customer_name = $request->input('customer_name');
            $customer_surname = $request->input('customer_surname');
            $description = $request->input('description');
            $amount = $request->input('amount');
            $currency = $request->input('currency');
        } else {
            // Si le formulaire n'a pas été soumis, afficher un message d'erreur et retourner
            echo "Veuillez passer par le formulaire";
            return;
        }



        $notify_url = 'https://api-checkout.cinetpay.com';
        $return_url = 'https://api-checkout.cinetpay.com';

        $paimentData = array(
        "transaction_id" => Str::random(40),
        "amount" => $amount,
        "currency" => $currency,
        "channels" =>'ALL',
        "description" => $description,
        "notify_url" => $notify_url,
        "return_url" =>$return_url,
        "invoice_data" =>[],
        //Fournir ces variables pour le paiements par carte bancaire
        "customer_name" =>$customer_name,//Le nom du client
        "customer_surname" => $customer_surname,//Le prenom du client
        "customer_email" => "", //l'email du client
        "customer_phone_number" => "", //Le numéro de téléphone du client
        "customer_address" => "", //l'adresse du client
        "customer_city" => "", // ville du client
        "customer_country" => "",//Le pays du client, la valeur à envoyer est le code ISO du pays (code à deux chiffre) ex : CI, BF, US, CA, FR
        "customer_state" => "", //L’état dans de la quel se trouve le client. Cette valeur est obligatoire si le client se trouve au États Unis d’Amérique (US) ou au Canada (CA)
        "customer_zip_code" => "" //Le code postal du client


    );

        $marchand = new Marchand("votre_apikey", "votre_site_id", "votre_secret_key");
        $apikey = $marchand->getApiKey("879098511661d05c0ccf078.42541696");
        $site_id = $marchand->getSiteId("5871000");


        $CinetPay = new CinetPay($site_id, $apikey);
        $result = $CinetPay->generatePaymentLink($paimentData);

        $url = $result["data"]["payment_url"];
        return redirect()->to($url);


    }

}
