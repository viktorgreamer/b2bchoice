<?php
/**
 * Created by PhpStorm.
 * User: anvik
 * Date: 21.04.2019
 * Time: 9:55
 */

namespace app\console;


use app\console\helper\Decorator;

class Threads extends \Thread
{

    const LOOP_COUNT = 5;
    const SLEEP_DURATION = 20;
    public $name;
    public $i;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run()
    {
        echo Decorator::success($this->name." WAS STARTED");
        $count = 0;
        while ($count < self::LOOP_COUNT) {
           echo Decorator::success($count);
            sleep(self::SLEEP_DURATION);
            $count++;
        }

       echo Decorator::success($this->name." WAS FINISHED");
    }


}