<?php


use app\console\Dispatcher;
use app\console\Input;


require __DIR__ . '/autoload.php';

$input = new Input($argv);


$dispatcher = new Dispatcher($input);

class My extends Thread {
    public function run() {
        $this->synchronized(function($thread){
            if (!$thread->done)
                $thread->wait();
        }, $this);
    }
}
$my = new My();

print_r($my);
$my->start();
var_dump($my->isRunning());
$my->synchronized(function($thread){
    $thread->done = true;
    $thread->notify();
}, $my);

