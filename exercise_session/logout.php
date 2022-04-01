<?php
session_start();

if (isset($_SESSION['name'])) {
    $_SESSION['name'] = null;
    header('Location: login.php');
}
