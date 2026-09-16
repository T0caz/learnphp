<?php

function dump(...$var)
{
    echo '<pre>';
    var_dump(...$var);
    echo '</pre>';
}

function view($viewName, $variables) {
    extract($variables);
    include __DIR__ . "/views/$viewName.php";
}