<?php
    $estoque = new Estoque();

    function gravaEstoque() {
      $pdo = new PDO("sqlite:controleEstoque.db");

      $queryCriaTabelaEstoque = "CREATE TABLE if not exists estoque (
        id	INTEGER NOT NULL,
        quantidade	INTEGER NOT NULL,
        produto_id	INTEGER,
        PRIMARY KEY(id AUTOINCREMENT),
        FOREIGN KEY(produto_id) REFERENCES produtos(id)
    )";

    $pdo->query($queryCriaTabelaEstoque);


    }
?>