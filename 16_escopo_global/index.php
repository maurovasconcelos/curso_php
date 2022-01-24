<?php

    $teste = "string";

    echo "$teste global 1 <br>";

    if (true){

        $teste = "string2"; // mudando o valor da variavel dentro de um if, a variavel global também é modificada

        echo "$teste if <br>";  

    }

    echo "$teste global 2 <br>";

    function funcao(){

        $teste = "xsxs";

        echo "$teste local <br>";

    }

    funcao();

    function testandoGlobal(){

        global $teste;

        echo "$teste global função <br>";

    }

    testandoGlobal();

    
    