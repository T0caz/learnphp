<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;
}

function dump(...$var)
{
    echo '<pre>';
    var_dump(...$var);
    echo '</pre>';
}

spl_autoload_register(function ($class) {
    $class = substr($class, 4);
    $class = str_replace('\\', '/', $class);
    require_once __DIR__ . "/../src/$class.php";
});

use App\Router;

Router::addRoute('/', function () {
    $title = 'World';
    $posts = [
        [
            'title' => 'Some world title 1',
            'content' => 'Some world content 1',
            'date' => 'January 1, 2021',
            'author' => 'Cars'
        ],

        [
            'title' => 'Some world title 1',
            'content' => 'Some world content 1',
            'date' => 'January 1, 2021',
            'author' => 'Kermo'
        ],

        [
            'title' => 'Some world title 3',
            'content' => 'Some world content 2',
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

    require __DIR__ . '/../views/index.php';
});
Router::addRoute('/us', function () {
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
    require __DIR__ . '/../views/us.php';
});
Router::addRoute('/technology', function () {
    $title = 'Technology';
    $posts = [
        [
            'title' => 'Some Technology title 1',
            'content' => 'Some Technology content 1',
            'date' => 'January 1, 2021',
            'author' => 'Cars'
        ],

        [
            'title' => 'Some Technology title 2',
            'content' => 'Some Technology content 2',
            'date' => 'January 2, 2021',
            'author' => 'Kermo'
        ],

        [
            'title' => 'Some Technology title 3',
            'content' => 'Some Technology content 3',
            'date' => 'January 3, 2021',
            'author' => 'Priit'
        ],

        [
            'title' => 'Some Technology title 4',
            'content' => 'Some Technology content 4',
            'date' => 'January 4, 2021',
            'author' => 'Joonas'
        ],
    ];
    require __DIR__ . '/../views/technology.php';
});
$router = new Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match) {
    call_user_func($match['action']);
}

// switch($_SERVER['REQUEST_URI']) {
//     case '/':
//         require __DIR__ . '/../views/index.php';
//         break;
//     case '/us':
//         $title = 'U.S.';
// $posts = [
//   ['title' => 'Some U.S title 1',
//    'content' => 'Some U.S content 1', 
//    'date' => 'January 1, 2021', 
//    'author' => 'Cars'],

//   ['title' => 'Some U.S title 2',
//    'content' => 'Some U.S content 2', 
//    'date' => 'January 2, 2021', 
//    'author' => 'Kermo'],

//   ['title' => 'Some U.S title 3',
//    'content' => 'Some U.S content 3', 
//    'date' => 'January 3, 2021', 
//    'author' => 'Priit'],
  
//   ['title' => 'Some U.S title 4',
//    'content' => 'Some U.S content 4', 
//    'date' => 'January 4, 2021', 
//    'author' => 'Joonas'],
// ];
//         require __DIR__ . '/../views/us.php';
//         break;
//     case '/technology':
//         $title = 'Technology';
// $posts = [
//   ['title' => 'Some Technology title 1',
//    'content' => 'Some Technology content 1', 
//    'date' => 'January 1, 2021', 
//    'author' => 'Cars'],

//   ['title' => 'Some Technology title 2',
//    'content' => 'Some Technology content 2', 
//    'date' => 'January 2, 2021', 
//    'author' => 'Kermo'],

//   ['title' => 'Some Technology title 3',
//    'content' => 'Some Technology content 3', 
//    'date' => 'January 3, 2021', 
//    'author' => 'Priit'],
  
//   ['title' => 'Some Technology title 4',
//    'content' => 'Some Technology content 4', 
//    'date' => 'January 4, 2021', 
//    'author' => 'Joonas'],
// ];
//         require __DIR__ . '/../views/technology.php';
//         break;
//     default:
//         echo '404 Not Found';
//         break;
// }
