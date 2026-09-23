<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\User;

class PublicController
{
    public function index()
    {
        $articles = Article::all();
        $title = 'World';
        view('index', compact('title', 'articles'));
    }
    public function us() {
        
        $articles = Article::all();
        $title = 'U.S.';
        view('us', compact('title', 'articles'));
    }


    public function technology() {
        
        $articles = Article::all();
        $title = 'Technology';
        view('technology', compact('title', 'articles'));
    }

    public function forms() {
        $title = 'Forms';
        view('forms', compact('title'));
    }

    public function answer() {
        dump($_GET);
        dump($_POST);
    }
}