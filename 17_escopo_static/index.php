<?php

    function teste(){

        $a = 0;
        $a++; // ++ comando pra auto incrementação, mesma coisa a = a + 1 

        echo "$a <br>";

    }

    teste();
    teste();
    teste();

    function testeStatic(){

        static $a = 0;
        $a++;

        echo "$a <br>";

    }

    testeStatic();
    testeStatic();
    testeStatic();

