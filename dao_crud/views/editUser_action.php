<?php
require '../utils/config.php';
require '../dao/UserDaoMysql.php';
$userDao = new UserDaoMysql($pdo);

$id = filter_input(INPUT_GET, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email && $id) {
    $user = new User();
    $user->setId($id);
    $user->setName($name);
    $user->setEmail($email);

    $userDao->update($user);
    header('Location: index.php');
    exit;
} else {
    header('Location: editUser.php?=' . $id);
    exit;
}
