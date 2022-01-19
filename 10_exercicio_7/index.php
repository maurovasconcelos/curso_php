<?php

    $pessoa = [
        'nome' => 'Mauro',
        'idade' => 23,
        'peso' => 85,
        'endereço' => 'Rua tal',
        'profissao' => 'Programador'
    ];

    // desafio
    print_r($pessoa);

    echo "<br>";

    if ($pessoa['idade'] > 18){
        echo "Esta pessoa é maior de idade!";
    }