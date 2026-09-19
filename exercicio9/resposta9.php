<?php
    $frase = $_POST["frase"];
    echo "Frase original: $frase";
    echo "<br>";
    echo "Sem espaços no início e no final: " . trim($frase);
    echo "<br>";
    echo "Todos os espaços removidos: " . str_replace(" ", "", $frase);