<?php

    $carro = [
        'Marca' => 'Peugot',
        'Rodas' => '4',
        'Teto solar' => true,
        'Velocidade max' => 300,
        'Blindado' => false,
    ];

    print_r($carro);

    $marca = $carro['Marca'];
    $velocidade_max = $carro['Velocidade max'];

    echo "<br>";
    echo "O carro é da marca $marca e atinge no maximo $velocidade_max km/h";
