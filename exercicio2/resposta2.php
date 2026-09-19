<?php
    $palavra = $_POST["palavra"];
    $maiusculo = strtoupper($palavra);
    $minusculo = strtolower($palavra);
    echo "<p>Palavra em caracteres maiúsculos: $maiusculo</p>";
    echo "<p>Palavra em caracteres minúsculos: $minusculo</p>";