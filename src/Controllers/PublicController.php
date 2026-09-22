<?php

namespace App\Controllers;


use PDO;
use PDOException;


class PublicController
{
    public function index()
    {
    try {
        $conn = new PDO("sqlite:" . __DIR__ . '/../../db.sqlite');
        // set the PDO error mode to exception
        $conn->setAttribute (PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION); 
        $sql = "SELECT * FROM articles";
        $result = $conn->query($sql);
        $rows = $result->fetchAll();
        dump($rows);
    
    }catch (PDOException $e) {
        echo "Connection failed: ". $e->getMessage();
    
    }
    // $title='World';
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