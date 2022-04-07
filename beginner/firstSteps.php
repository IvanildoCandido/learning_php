<?php
echo "<h1>Olá Mundo!</h1>";
$name = "Ivanildo";
$age = 34;
echo "<h3>Meu nome é: $name e eu tenho $age anos!</h3>";
$fruits = ['uva', 'maça', 'pera'];
echo "<p>A última fruta é: $fruits[2]</p>";

//Exemplo de array spread.
$cars = ['Fusca', 'Corsa', 'Palio'];
$motorcycle = ['Honda', 'Yamaha', 'Fenix'];
$vehicles = [...$cars, ...$motorcycle];
print_r($vehicles);

//Solução do exercício   
$lista = array(
    "nome" => "Bonieky",
    "idade" => 90,
    "atributos" => array(
        "forca" => 60,
        "agilidade" => 80,
        "destreza" => 50
    ),
    "vida" => 1000,
    "mana" => 928
);
echo '<br>';
echo "Nome: " . $lista['nome'] . '<br>';
echo "Força: " . $lista['atributos']['forca'] . '<br>';
echo "Vida: " . $lista['vida'] . '<br>';
