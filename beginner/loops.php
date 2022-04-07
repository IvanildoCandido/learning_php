<?php
//Exemplo de WHILE
echo '<h1>Laço WHILE</h1>';
$number = 0;
while ($number <= 10) {
    echo '<br> N = ' . $number;
    $number++;
}
//Exemplo de FOR
echo '<h1>Laço FOR</h1>';
for ($i = 1; $i <= 10; $i++) {
    echo $i . '<br>';
}
//Exemplo de FOREACH
echo '<h1>Laço FOREACH</h1>';
$tecnologies = ['html', 'CSS', 'JavaScript', 'PHP'];

echo '<ol>';
foreach ($tecnologies as $tecnology) {
    echo "<li>$tecnology</li>";
}
echo '</ol>';

foreach ($tecnologies as $index => $tecnology) {
    echo '<br>Item ' . ($index + 1) . ': ' . $tecnology;
}
