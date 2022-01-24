<?php

    $texto = "Algum texto qualquer";

    echo $texto;
    echo "<br>";

    $velocidadeMaxima = 100;    // Recomendado usar com camel case
    $velocidade_minima = 80;    // Dahora usar com snake case tb

    $numeroTorto = 23.5;
    $verdadeiro = true;

    $itens = ["Carro", "Moto", "Caminhão", "Carerta", "etc...", "enfim, é uma lista kkkkk"];    // array

    echo $velocidadeMaxima;
    echo "<br>";
    echo $numeroTorto;
    echo "<br>";
    echo $verdadeiro;
    echo "<br>";
    print_r($itens);    //reforçando, echo nao printa array's, o print_r() sim
    echo "<br>";


    $primeiro_num = 12.179;
    $segundo_num = 23;
    $soma = $primeiro_num + $segundo_num;

    echo "A soma da primeira var + segunda var é igual a $soma";
    