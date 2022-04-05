<?php
$pdo = new PDO("mysql:dbname=db_php;host=144.22.192.13", "root", "ag72qjh5");

$sql = $pdo->query('SELECT * FROM users');

$data = $sql->fetchAll(PDO::FETCH_ASSOC);

$total = $sql->rowCount();

echo 'TOTAL DE REGISTROS: ' . $total;

echo '<pre>';
print_r($data);
