<?php

    echo 4.54;
    echo "<br>";
    echo 1556.4;
    echo "<br>";

    $c = -78.1;
    echo "<br>";

    if(is_float($c)){
        echo "Sim, podemos ter floats negativos!";
    }

    if(is_int($c)){             //Não dever ser printado
        echo "É um inteiro";
    }
