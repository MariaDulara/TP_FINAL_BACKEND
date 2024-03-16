<?php
    echo $_GET["quantidade"]."<br>";
    echo $_GET["exibir_produto"];

    $queryIniciaEstoque = "INSERT INTO estoque (quantidade, produto_id)
    VALUES (".$_GET["exibir_produto"].", ".$_GET["quantidade"].")";

    $pdo = new PDO("sqlite:controleEstoque.db");

    $pdo->query($queryIniciaEstoque);

?>