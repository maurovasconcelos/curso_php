<?php

    // operador NOT utiliza-se ! antes da operação, serve pra inverter o resultado, se for true vira false e visse e versa

    if(!(5 > 2)){ // true > true
        echo "A operação 1 é verdadeira <br>";
    }

    if(!(5 > 20)){ // false > true
        echo "A operação 2 é verdadeira <br>";
    }

    $a = 10;
    $b = 20;

    if(!($a >= $b)){ // troe > true
        echo "A operação 3 é verdadeira <br>";
    }