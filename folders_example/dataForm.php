<?php
session_start();
$user = filter_input(INPUT_POST, 'user');
$pass = filter_input(INPUT_POST, 'pass');
$email = filter_input(INPUT_POST, 'email');

if ($user && $pass && $email) {
    $expiration = time() + (86400);
    setcookie('userName', $user, $expiration);
    echo 'Usuário: ' . $user . '<br>';
    echo 'Senha: ' . $pass . '<br>';
    echo 'Email: ' . $email . '<br>';
} else {
    $_SESSION['alert'] = 'Preencha todos os campos!';
    header('Location: forms.php');
}
