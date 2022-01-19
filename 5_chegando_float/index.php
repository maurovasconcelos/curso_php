<?php

    $a = 15.2;
    $b = "Uma string qualquer";

    if(is_float($a)){
        echo "É float 1!<br>";
    }

    if(is_float($b)){
        echo "É float 2!<br>";
    }

    if(is_float(158.478)){
        echo "É float 3!<br>";
    }

    if(is_float("teste")){
        echo "É float 4!<br>";
    }