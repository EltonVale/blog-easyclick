<?php

    include_once("helpers/url.php");    ##saber porque nao ta funcionando
    include_once("data/posts.php");
    include_once("data/categories.php");
?>
<!doctype html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Easy Click</title>
    <link rel="stylesheet"href="<?=$BASE_URL?>/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    

<body>
<header>
    <a href="<?=$BASE_URL?>" id="logo">
        <img src="<?=$BASE_URL?>img/clickprata.png" alt="BLog Codar">
    </a>
    <nav>
        <ul id="navbar">  
            <li><a href="<?= $BASE_URL ?>"class="nav-link">Home</a></li>
            <li><a href="#"class="nav-link">Categorias</a></li>
            <li><a href="#"class="nav-link">Sobre</a></li>
            <li><a href="<?=$BASE_URL?>contato.php" class="nav-link">Contato</a></li>
        </ul>
    </nav>
</header>
</body>


