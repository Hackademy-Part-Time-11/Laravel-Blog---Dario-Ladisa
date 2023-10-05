<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function shome(){
        $nome = 'Cristiano';
        $anno = '1967';
        return view('pages.home', ['nome'=> $nome, 'anno'=> $anno]);
    }

    public function shofunc(){
        $description = 'Il pane è la mia passione. Produco da quando ho 11 anni grazie agli insegnamenti della nonna. Mi piace aggiungere il mio tocco ai miei prodotti. Utilizzo solo prodotti a km0 e tanto amore."';
    return view('pages.chi_sono', ['description'=> $description]);
    }

    public function showCont(){
        return view('pages.contatti');
    }

    public function userLogin(){
        return view('pages.login');
    }

}
