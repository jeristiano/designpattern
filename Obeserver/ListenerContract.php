<?php


/**
 * Interface ListenerContract
 */
interface ListenerContract
{
    /**
     * @param object $event
     * @return mixed
     */
    public function process (object $event);

    /**
     * @return mixed
     */
    public function listen ():array;

}