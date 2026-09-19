<?php
    $email = $_POST["email"];
    $posicao = strpos($email, "@");

    echo "Domínio: " . substr($email, $posicao + 1);