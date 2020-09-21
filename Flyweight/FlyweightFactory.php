<?php
require_once './ConcreteFlyweight.php';
/**
 * Class FlyweightFactory
 */
class FlyweightFactory
{
    private $flyweights = [];

    /**
     * @param $key
     */
    public function getFlyweight ($key): FlyweightContract
    {
        if (!array_key_exists($key, $this->flyweights)) {
            $this->flyweights[$key] = new ConcreteFlyweight();
        }
        return $this->flyweights[$key];
    }

}