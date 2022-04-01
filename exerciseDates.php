<?php
$today = date('l', strtotime('2022-03-22'));

switch ($today) {
    case 'Sunday':
        echo 'Domingo';
        break;
    case 'Monday':
        echo 'Segunda-feira';
        break;
    case 'Tuesday':
        echo 'Terça-feira';
        break;
    case 'Wednesday':
        echo 'Quarta-feira';
        break;
    case 'Thursday':
        echo 'Quinta-feira';
        break;
    case 'Friday':
        echo 'Sexta-feira';
        break;
    case 'Saturday':
        echo 'Sábado';
        break;
}
