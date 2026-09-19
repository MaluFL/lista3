<?php
    $palavra = strtolower($_POST["palavra"]);
    $invertida = strrev($palavra);

    if ($palavra == $invertida) {
        echo "$palavra é um palíndromo!";
    } else {
        echo "$palavra NÃO é um palíndromo!";
    }