<?php
/**
 * Created by PhpStorm.
 * User: anvik
 * Date: 21.04.2019
 * Time: 9:55
 */

namespace app\console;


class Threads extends \Thread
{
    public $name;
    public $i;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run()
    {
        $count = 0;
        while ($count < 5) {
            echo $this->name;
            sleep(1);
            $count++;
        }
    }


}