<?php
$pass = '1231';

$hash = password_hash($pass, PASSWORD_DEFAULT);

echo "Senha encriptada: " . $hash . '<br>';

$encrypty = '$2y$10$dbQvUtpwm0HghxbPWLEWDO1tny3dl9847bmBsVOMn.MSmv/M3RZwi';

if (password_verify($pass, $encrypty)) {
    echo 'Senha Correta!';
} else {
    echo 'Senha Errada!';
}
