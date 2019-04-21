<?php
/**
 * Created by PhpStorm.
 * User: anvik
 * Date: 21.04.2019
 * Time: 8:19
 */

namespace app\console;

class Input
{
    public $argv;

    public $type;
    public $processName;

    public function __construct($argv)
    {
       $this->argv = $argv;
       $this->parse();
    }

    protected function parse(){
        if (isset($this->argv[1])) $this->type = $this->argv[1];
        if (isset($this->argv[2])) $this->processName = $this->argv[2];
    }

    public function log() {

    }

}