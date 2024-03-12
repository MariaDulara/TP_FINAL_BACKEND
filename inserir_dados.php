<?php
    echo $_GET["nome"];

    $pdo = new PDO("sqlite:controleEstoque.db");

    $queryInsereCategoria = "INSERT INTO categorias (nome)
    VALUES (\"".$_GET["nome"]."\")";

    $pdo->query($queryInsereCategoria);


?>