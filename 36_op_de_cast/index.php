<?php

    // passando entre parenteses (int) antes do valor da variavel vc converte a variavel pra aquele tipo de dado
    // top pra krl

    $a = (int) "12";

    echo $a;
    echo "<br>";
    echo $a + 10;
    echo "<br>";

    if($a === 12){ 
        echo "A é identico a 12 <br>";
    }

    $b = (float) "3.146872";

    if($b === 3.146872){ 
        echo "A é identico a 3.14 <br>";
    }

    $c = (string) 34;

    echo $c;
    echo "<br>";

    if($c === "34"){ 
        echo "C é identico a 34 <br>";
    }