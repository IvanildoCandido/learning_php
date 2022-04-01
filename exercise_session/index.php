<?php
session_start();

if (isset($_SESSION['name'])) {
    echo 'Olá, ' . $_SESSION['name'] . ' ' . "<a href='logout.php'>Sair</a>";
} else {
    header('Location: login.php');
}
