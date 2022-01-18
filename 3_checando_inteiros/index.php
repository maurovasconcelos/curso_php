<?php

    //Verifica se o numero é um inteiro e retorna true ou false
    // is_int(12)  

    if (is_int(12)) {         //Se for true, ja sabe ne
        echo "É um inteiro <br>";
    }

    if (is_int("Não é um inteiro")) {         //false
        echo "É um inteiro 2 <br>";
    }


    $a = 10;   //encapsulando o dado numa variavel, da certo também


    if (is_int($a)) {         
        echo "É um inteiro 3 <br>";
    }