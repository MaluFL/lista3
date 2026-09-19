<?php
    $nome = $_POST["nome"];
    echo "Nome original: $nome";
    echo "<br>";
    echo "Iniciais: " . implode(".", array_map(function($word) { return strtoupper($word[0]); }, explode(" ", trim($nome)))) . ".";