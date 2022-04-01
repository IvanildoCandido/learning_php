<?php
session_start();
$user = filter_input(INPUT_POST, 'user');

$_SESSION['name'] = $user;

if (isset($_SESSION['name'])) {
    header('Location: index.php');
} else {
    header('Location: login.php');
}
