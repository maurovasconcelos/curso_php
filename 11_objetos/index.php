<?php

    class Pessoa {
        
        function falar() {
            echo "Olá pessoas!";
        }

    }

    $mauro = new Pessoa();

    $mauro -> nome = "Mauro";

    echo $mauro -> nome;

    echo "<br>";

    $mauro -> falar();