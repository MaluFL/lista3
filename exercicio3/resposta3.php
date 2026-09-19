<?php
    $palavra1 = $_POST["palavra1"];
    $palavra2 = $_POST["palavra2"];
    echo str_contains($palavra1, $palavra2) ? "A segunda palavra está contida na primeira" : "A segunda palavra NÃO está contida na primeira";