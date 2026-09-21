<?php

namespace App\Controllers;

class PublicController {

    public function index() {
        $title = 'World';
        $posts = [
            [
                'title' => 'Some world title 1',
                'content' => 'Some world content 1',
                'date' => 'January 1, 2021',
                'author' => 'Cars'
            ],

            [
                'title' => 'Some world title 2',
                'content' => 'Some world content 2',
                'date' => 'January 2, 2021',
                'author' => 'Kermo'
            ],

            [
                'title' => 'Some world title 3',
                'content' => 'Some world content 3',
                'date' => 'January 3, 2021',
                'author' => 'Priit'
            ],

            [
                'title' => 'Some world title 4',
                'content' => 'Some world content 4',
                'date' => 'January 4, 2021',
                'author' => 'Joonas'
            ],
        ];

        view('index', compact('title', 'posts'));
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