<?php
require 'config.php';
$id = filter_input(INPUT_GET, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email && $id) {
    $sql = $pdo->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
    $sql->bindValue(":name", $name);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":id", $id);
    $sql->execute();
    header('Location: connect.php');
    exit;
} else {
    header('Location: addUser.php');
    exit;
}
