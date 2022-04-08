<?php
require '../utils/config.php';
require '../dao/UserDaoMysql.php';
$userDao = new UserDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {
    if ($userDao->findByEmail($email) === false) {
        $newUser = new User();
        $newUser->setName($name);
        $newUser->setEmail($email);

        $userDao->add($newUser);
        header('Location: ../views/index.php');
        exit;
    } else {
        header('Location: ../views/addUser.php');
        exit;
    }
} else {
    header('Location: ../views/addUser.php');
    exit;
}
