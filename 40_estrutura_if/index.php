<?php

    // condição true
    if(5 > 2){

        echo "Deu certo! entrou no if <br>";
    }


    // condição falsa
    if(2 >= 5){

        echo "Não vai entrar no if, por que deu false! <br>";

    }

    // utilizando op. logico
    if(10 === 10 && 9 > 3){

        echo "Deu certo! entrou no if 2 <br>";

    }

    // variaveis
    $a = 10;
    $b = 5;

    $c = "Deu certo, entrou no if 3 ulitizando variaveis <br>";

    if($a >= $b){

        echo $c;

    }