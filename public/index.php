<?php

require_once './bootstrap.php';



if ($template){
    echo $twig->render($template, ['name' => 'World']);
}