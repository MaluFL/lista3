<?php
    $frase = $_POST["frase"];
    $qntd = preg_match_all("/[aeiouáéíóúàèìòùâêîôûãõ]/iu", $frase);
    echo "A frase possui $qntd vogais.";