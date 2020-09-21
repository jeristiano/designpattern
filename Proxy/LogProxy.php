<?php

require_once 'Moveable.php';

/**
 * Class LogProxy
 */
class LogProxy implements Moveable
{

    protected $moveable;

    public function __construct (Moveable $moveable)
    {
        $this->moveable = $moveable;
    }

    public function move ()
    {
        echo '开始移动' . PHP_EOL;
        $this->moveable->move();

        echo '结束移动' . PHP_EOL;
    }
}