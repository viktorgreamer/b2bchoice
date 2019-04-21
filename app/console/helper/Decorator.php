<?php

namespace app\console\helper;

class Decorator
{

    const SUCCESS = 1;
    const WARNING = 2;
    const DANGER = 3;
    const PRIMARY = 4;
    const SIMPLE = 0;


    public $message = '';
    public $type = 0;

    public function __construct($message, $type)
    {
        $this->type = $type;
        $this->message = $message;
    }

    public static function success($message)
    {
        return (new self($message, self::SUCCESS))->printMessage();
    }

    public static function danger($message)
    {
        return (new self($message, self::DANGER))->printMessage();
    }

    public function printMessage()
    {

        switch ($this->type) {
            case 2:
                return "\033[1;31m" . $this->message . "\033[0m\n";
                break;
            case 1:
                return "\033[1;32m" . $this->message . "\033[0m\n";
                break;
            case 3:
                return "\033[1;33m" . $this->message . "\033[0m\n";
                break;
            case 4:
                return "\033[1;34m" . $this->message . "\033[0m\n";
                break;
            default:
                return $this->message . "\n";
                break;
        }


    }
}