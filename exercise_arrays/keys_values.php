<?php
$array = [
    'name' => 'Ivanildo',
    'age' => 34,
    'breed' => 'parda',
    'company' => 'Systech Tecnologia',
    'profession' => 'Analista de Sistemas',
    'year' => 2022
];
$keys = array_keys($array);
$values = array_values($array);
?>
<table border="1">
    <thead>
        <tr>
            <th>Chave</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        <?php
        array_map(function ($key, $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }, $keys, $values);
        ?>
    </tbody>
</table>
<br>
<table border="1">
    <thead>
        <tr>
            <?php
            array_map(function ($key) {
                echo "<th>$key</th>";
            }, $keys);
            ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            array_map(function ($value) {
                echo "<td>$value</td>";
            }, $values);
            ?>
        </tr>
    </tbody>
</table>