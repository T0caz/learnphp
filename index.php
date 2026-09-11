<?php

$name = "Karl";
$coinFlip = rand(0, 1);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?></h1>
    <?php if ($coinFlip): ?>
        <h1>Kull</h1>
    <?php  else: ?>
        <h1>Kiri</h1>
    <?php endif; ?>

    <ul>




</body>
</html>
