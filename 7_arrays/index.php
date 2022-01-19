<?php

    $a = [1, 2, 3];

    // echo $a;     Não da pra printar uma variavel que seja uma lista no php

    print_r($a);    // o print_r() consegue printar a lista mostrando os valores e seus indices
    echo "<br>";
    echo $a[0];

    $arr = ["Mauro", 1005, true];

    echo "<br>";
    print_r($arr);
    echo "<br>";
    print_r($arr[1]);