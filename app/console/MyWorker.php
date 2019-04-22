<?php

namespace app\console;

class MyWorker extends \Worker {


    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}