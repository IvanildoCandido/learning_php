<?php
require 'vendor\\autoload.php';

use classes\Math\Calculator;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('test.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

$calc = new Calculator();

echo $calc->sum(2, 3);
