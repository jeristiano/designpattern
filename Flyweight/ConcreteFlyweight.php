<?php

require_once './FlyweightContract.php';
/**
 * Class ConcreteFlyweight
 */
class ConcreteFlyweight implements FlyweightContract
{

    private $intrinsicState = 101;

    /**
     * @param $extrinsicState
     */
    public function operation ($extrinsicState): void
    {

        echo 'mysql共享享元对象' . ($extrinsicState + $this->intrinsicState) . PHP_EOL;

    }
}