<?php
    $palavra = $_POST["palavra"];
    $invertida = strrev($palavra);
    echo "A palavra \"$palavra\" invertida é: $invertida";