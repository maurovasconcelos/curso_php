<?php

    $x = 10;

    $y =& $x;   //sinal =& de atribuição

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 15;    // mudando a variavel refenciada pra 15 , tanto $x quando $y se tornam 15


    echo "Atribuição após ref";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $x = 20;    // mudando a principal pra 20

    echo "Atribuição após ref 2";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $nome = "uma string 1";

    $nome2 =& $nome;   //atribuindo $b a variavel $a

    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";

    $nome2 = "mudando a string";    // também funciona pra string's

    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";




