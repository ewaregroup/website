<?php

namespace App\Http\Controllers;

use App\Models\Contactform;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contact()
    {
        return view('contact/contact');
    }


    public function contactadd(Request $request)
    {

        if ($request->isMethod("post")) {

            $request->validate([
                'nom' => 'required',
                'phone' => 'required',
                'subject' => 'required',
                'email' => 'required',
                'message' => 'required'
            ]);

            $contactform = new Contactform();
            $contactform->nom = $request->nom;
            $contactform->email = $request->email;
            $contactform->subject = $request->subject;
            $contactform->message = $request->message;
            $contactform->phone = $request->phone;
            $contactform->save();

            return redirect('/contact')->with('success', 'Vous êtes abonné à notre newsletter!');

        }

        return view('contact/contact', []);


    }

    public function index() {
        return view('Admin.indexcontact', [
            'contacts' => Contactform::all()
        ]);
    }
}
