<?php
/**
 * Created by PhpStorm.
 * User: anvik
 * Date: 21.04.2019
 * Time: 8:56
 */

namespace app\console;


use app\console\helper\Decorator;
use app\exceptions\WrongRequestNameException;

class Dispatcher
{

    const TYPE_THREAD = 'thread';
    const TYPE_MCP = 'MCP';


    public $input;
    public $type;
    public $name;

    public function __construct(Input $input)
    {

        $this->input = $input;
        $this->make();

    }

    protected function make(){
        if (($this->input->type === self::TYPE_THREAD) ||($this->input->type === self::TYPE_MCP)) {
          $this->type =   $this->input->type;

        } else throw new WrongRequestException(" Unknown request type '".$this->input->type."'");
    }

    public function getTypeRequest(){
        return $this->input->type;
    }

}