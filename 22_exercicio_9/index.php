<?php

    $a = "5";
    $b = 12;
    $operecao = $a * $b;

    echo gettype($a) . "<br>";

    echo $operecao . "<br>";

    echo gettype($operecao);
    echo "<br>";

    echo gettype([]); // gettype pra pegar o tipo do dado que esta sendo passado como parametro
    echo "<br>";
    echo gettype(12.54);
    echo "<br>";
    echo gettype("Alou");
