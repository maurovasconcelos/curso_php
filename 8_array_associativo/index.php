<?php

    // Utilizando => posso definir a chave para cada valor do array ao inves de procurar pelo indice posso procurar pela chave que coloquei

    $arr = ['nome' => 'cachorro', 'patas' => 4, 'cor' => 'preto e branco', 'tamanho' => 'porte grande', 'temperamento' => 'calmo'];

    print_r($arr);
    echo "<br>";
    echo $arr['nome'];
    echo "<br>";
    echo $arr['patas'];
    echo "<br>";
    echo $arr['cor'];
    echo "<br>";
    echo $arr['tamanho'];
    echo "<br>";
    echo $arr['temperamento'];

    $arrAssoc = ['chave' => 'valor', 'bool' => true];

    echo "<br>";
    print_r($arrAssoc);
