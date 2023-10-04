<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articles =[];

    public function __construct(){

    $this->articles = [
        1 => ['id' => 1, 'title' => 'Pane di segale', 'category' => 'prodotti speciali', 'description' => 'Super pane di segale.', 'visible' => false],
        2 => ['id' => 2, 'title' => 'Piadine', 'category' => 'Pizzelle', 'description' => 'Prova le nostre piadine!', 'visible' => true],
        3 => ['id' => 3, 'title' => 'Nuovi Grissini', 'category' => 'Grissini', 'description' => 'Grissini con semi di sesamo fatti in casa.', 'visible' => true]
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
