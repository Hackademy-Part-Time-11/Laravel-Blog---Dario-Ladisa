<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function viewForm (){
        return view('pages.contatti');
    }

    public function sendForm (Request $request)
    {
        $request->name;
        $request->email;
        $request->message; 

        if ($request->name == '') {
            return redirect()->back()->with(['error' => 'Il campo nome è obbligatorio!']);
        }
        
        // Invio i dati e sono ok
        // Elaborato di dati 

        return redirect()->back()->with(['success' => 'Richiesta inviata con successo!']);
    
    }
}
