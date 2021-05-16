<?php

function safadao($dia, $mes, $ano){
    return 100 - (somatorio($mes) + ($ano/100) * ( 50 - $dia ));
}

function somatorio($num){
    $resultado = 0;
    for($num; $num > 0; $num--){
        $resultado += $num;
    }
    
    return $resultado;
}
