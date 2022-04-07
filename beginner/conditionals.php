<?php
//Mostrar saudação ao usuário
$hour = 13;
if ($hour < 12) {
    echo "Bom dia!";
} else {
    echo "Bom tarde!";
}
//Exemplo operador ternário
$age = 17;
$result = ($age >= 18) ? "Maior de Idade!" : "Menor de Idade!";
echo '<br>' . $result;

//Exemplo null CAO
$name = "Ivanildo";
$lastName = 'Cândido';
$fullName = $name . ' ';
$fullName .=  $lastName ?? ' Sem Sobrenome';

echo '<br>' . $fullName;

//Exemplo do Case

$option = 'tarde';

switch ($option) {
    case 'dia':
        echo '<br> Você escolheu DIA!';
        break;
    case 'tarde':
        echo '<br> Você escolheu TARDE!';
        break;
    case 'noite':
        echo '<br> Você escolheu NOITE!';
        break;
    default:
        echo '<br> Você escolheu uma opção INVÁLIDA!';
        break;
}
