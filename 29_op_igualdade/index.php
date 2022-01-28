<?php

    if(3 == 4){
        echo "Comparação verdadeira <br>";
    }

    if(2 == "2"){
        echo "Comparação verdadeira 2 <br>";
    }

    $a = 12;
    $b = 12;
    $c = 100;

    if($a == $b){
        echo "Comparação verdadeira 3 <br>";
    }

    if($c == $a){
        echo "Comparação verdadeira 4 <br>";
    }

    $nome = "Mauro";
    $nomeDoSistema = "Mauro";

    if($nome == $nomeDoSistema){
        echo "Os bateram, ta top <br>";
    }