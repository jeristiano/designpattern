<?php
require_once './Moveable.php';

/**
 * Class MotorMove
 */
class MotorMove implements Moveable
{
    public function move ()
    {
        $randon=rand(1,10);
        sleep($randon);
    }
}