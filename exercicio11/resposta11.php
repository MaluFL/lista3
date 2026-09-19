<?php
    $valor = $_POST["valor"];
    echo "Valor original: $valor";
    echo "<br>";
    echo "Valor em R$: " . number_format($valor, 2, ",", ".");