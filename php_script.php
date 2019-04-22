<?php


use app\console\Dispatcher;
use app\console\helper\Decorator;
use app\console\Input;
use app\console\Threads;


require __DIR__ . '/autoload.php';

$input = new Input($argv);


$dispatcher = new Dispatcher($input);
$dispatcher->resolver();
