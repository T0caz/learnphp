<?php

$title = 'Technology';
$posts = [
  ['title' => 'Some Technology title 1',
   'content' => 'Some Technology content 1', 
   'date' => 'January 1, 2021', 
   'author' => 'Cars'],

  ['title' => 'Some Technology title 2',
   'content' => 'Some Technology content 2', 
   'date' => 'January 2, 2021', 
   'author' => 'Kermo'],

  ['title' => 'Some Technology title 3',
   'content' => 'Some Technology content 3', 
   'date' => 'January 3, 2021', 
   'author' => 'Priit'],
  
  ['title' => 'Some Technology title 4',
   'content' => 'Some Technology content 4', 
   'date' => 'January 4, 2021', 
   'author' => 'Joonas'],
]


?>

<?php include __DIR__ . '/partials/header.php'; ?>

    <main class="container">
      <div class="row g-5">
        <div class="col-md-8">
          <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
    <?php include __DIR__ . '/partials/footer.php'; ?>

