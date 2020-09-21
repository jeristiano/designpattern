<?php

require_once 'Moveable.php';

/**
 * Class TimeProxy
 */
class TimeProxy implements Moveable
{

    protected $moveable;

    public function __construct (Moveable $moveable)
    {
        $this->moveable = $moveable;
    }

    public function move ()
    {
        echo '开始记录时间'.PHP_EOL;
        $a = microtime(true);
        $this->moveable->move();
        $b = microtime(true);

        echo '执行时间:' . ($b - $a).PHP_EOL;
    }
}