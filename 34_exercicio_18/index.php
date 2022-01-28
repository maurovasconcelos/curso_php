<?php

    // Comparação 1
    if(12 < 5 || "João" === "João"){    //false e true
        echo "Comparação 1 Correta <br>";
    }

    // Comparação 1
    if(1 > 5 || 1){     // false e true ( 1 = true )
        echo "Comparação 2 Correta <br>";
    }

    // Comparação 1
    if(20 === "20" && 51 >= 31){    // false e true, logo nao esta correto
        echo "Comparação 3 não esta correta, nao deve printar <br>";
    }
