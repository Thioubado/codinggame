<?php

function multecho(float $a, float $b){
    echo $a. " + " .$b. " = " .($a * $b). "<br/>";
}

function multreturn(float $a, float $b){
    return $a * $b. "<br/>";
}

multecho(2, 3);

$res = multreturn(4, 5);
echo $res += 2;