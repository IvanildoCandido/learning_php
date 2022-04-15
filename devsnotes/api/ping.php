<?php
require('../config.php');
require('../return.php');

$array['result'] = ['pong' => true];

echo json_encode($array);
exit;
