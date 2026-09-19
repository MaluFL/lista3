<?php
    $numero = $_POST["numero"];
    $cima = ceil($numero);
    $baixo = floor($numero);
    $arredondado = round($numero);
    echo "O número $numero arredondado para cima é: $cima";
    echo "<br>";
    echo "O número $numero arredondado para baixo é: $baixo";
    echo "<br>";
    echo "O número $numero arredondado é: $arredondado"; 