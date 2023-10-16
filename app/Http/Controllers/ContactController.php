<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function viewForm (){
        return view('pages.contatti');
    }

    public function sendForm (){
        return 'Hai raggiunto correttamente il metodo sendForm';
    }
}
