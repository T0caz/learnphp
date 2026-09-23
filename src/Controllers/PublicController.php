<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\User;

class PublicController
{
    public function index()
    {
        $articles = Article::all();
        dump($articles);
        $users = User::all();
        dump($users);
        // $title = 'World';
        // view('index', compact('title', 'posts'));
    }
    public function us() {
        $title = 'U.S.';
        $posts = [
            [
                'title' => 'Some U.S title 1',
                'content' => 'Some U.S content 1',
                'date' => 'January 1, 2021',
                'author' => 'Cars'
            ],

            [
                'title' => 'Some U.S title 2',
                'content' => 'Some U.S content 2',
                'date' => 'January 2, 2021',
                'author' => 'Kermo'
            ],

            [
                'title' => 'Some U.S title 3',
                'content' => 'Some U.S content 3',
                'date' => 'January 3, 2021',
                'author' => 'Priit'
            ],

            [
                'title' => 'Some U.S title 4',
                'content' => 'Some U.S content 4',
                'date' => 'January 4, 2021',
                'author' => 'Joonas'
            ],
        ];

        view('us', compact('title', 'posts'));
    }


    public function technology() {
        $title = 'Technology';
        $posts = [
            [
                'title' => 'Some technology title 1',
                'content' => 'Some technology content 1',
                'date' => 'January 1, 2021',
                'author' => 'Cars'
            ],

            [
                'title' => 'Some technology title 2',
                'content' => 'Some technology content 2',
                'date' => 'January 2, 2021',
                'author' => 'Kermo'
            ],

            [
                'title' => 'Some technology title 3',
                'content' => 'Some technology content 3',
                'date' => 'January 3, 2021',
                'author' => 'Priit'
            ],

            [
                'title' => 'Some technology title 4',
                'content' => 'Some technology content 4',
                'date' => 'January 4, 2021',
                'author' => 'Joonas'
            ],
        ];

        view('technology', compact('title', 'posts'));
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