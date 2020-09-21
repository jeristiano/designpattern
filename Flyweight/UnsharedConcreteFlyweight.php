<?php
require_once 'FlyweightContract.php';

/**
 * Class UnsharedConcreteFlyweight
 */
class UnsharedConcreteFlyweight implements FlyweightContract
{

    private $allState = 1000;

    /**
     * @param $extrinsicState
     */
    public function operation($extrinsicState) : void
    {
        echo 'mysql非共享享元对象：' . ($extrinsicState + $this->allState) . PHP_EOL;
    }
}