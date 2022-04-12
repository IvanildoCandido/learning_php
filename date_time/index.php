<?php
$date = new DateTime();

echo $date->format('d/m/Y H:i:s');

$date->add(DateInterval::createFromDateString('2 months'));

echo '<br>' . $date->format('d/m/Y H:i:s');

$date = new DateTime('2012-12-01 15:35:00');

$date->setTimeZone(new DateTimeZone('America/Sao_Paulo'));

echo '<br>' . $date->format('d/m/Y H:i:s');

$today = new DateTime();
$newYear = new DateTime('2023-01-01');

$diff = $today->diff($newYear);

echo '<br>' . $diff->format('%a dias!');
