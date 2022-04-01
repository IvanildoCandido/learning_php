<?php
//Função com passagem por referencia
function sum($n1, $n2, &$total)
{
    $total =  $n1 + $n2;
};

$result = 0;
sum(5, 10, $result);
echo "A soma de 5 e 10 é " . $result;

//Exemplo de arrow Function e função anonima

$multiply = fn ($value) => $value * 2;

echo '<br>';

echo $multiply(3);
