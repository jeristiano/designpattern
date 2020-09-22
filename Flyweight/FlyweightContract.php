<?php


/**
 * Interface FlyweightContract
 */
interface FlyweightContract
{
    /**
     * @param $extrinsicState
     */
    public function operation ($extrinsicState): void;
}