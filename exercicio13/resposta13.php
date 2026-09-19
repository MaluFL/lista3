<?php
    $frase = $_POST["frase"];
    $palavras = explode(" ", trim($frase));

    $maior = $palavras[0];

    foreach ($palavras as $palavra) {
        if (strlen($palavra) > strlen($maior)) {
            $maior = $palavra;
        }
    }

    echo "Número de palavras: " . count($palavras);
    echo "<br>";
    echo "Maior palavra: $maior";