<?php
$name = filter_input(INPUT_POST, 'name');
$names = file_get_contents('names.txt');
$names .= "$name\n";

if ($name) {
    file_put_contents('names.txt', $names);
}
header('Location: index.php');
