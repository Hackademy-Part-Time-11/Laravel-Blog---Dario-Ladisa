<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articles =[];

    public function __construct(){

    $articles = [
        1 => ['id' => 1, 'title' => 'Pane di segale', 'category' => 'prodotti speciali', 'description' => 'Super pane di segale.', 'visible' => false],
        2 => ['id' => 2, 'title' => 'Risultati Olimpiadi 2024', 'category' => 'Sport', 'description' => 'Risultati e medaglie vinte alle Olimpiadi del 2024.', 'visible' => true],
        3 => ['id' => 3, 'title' => 'Nuove Politiche Fiscali', 'category' => 'Economia', 'description' => 'Le ultime novità sulle politiche fiscali nazionali ed estere.', 'visible' => true]
        ];
    }

    public function index(){
        $title = 'articles';

        $articles = $this->articles;

        return view ('pages.articles', compact('title', 'articles'));
    }

    public function show($id){

        return view('pages.article', ['article' => $articles[$id]]);

    }


}
