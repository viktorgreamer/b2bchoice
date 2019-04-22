<?php


use app\console\Dispatcher;
use app\console\Input;


require __DIR__ . '/autoload.php';

$input = new Input($argv);


$dispatcher = new Dispatcher($input);
echo "djsjlfjsd";
$dispatcher->resolver();
