<?php


/**
 * Interface EventDispatcherContract
 */
interface EventDispatcherContract
{
    /**
     * @param \ListenerContract $contract
     * @return mixed
     */
    public function addListener (ListenerContract $contract);
}