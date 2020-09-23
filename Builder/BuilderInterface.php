<?php


/**
 * Interface BuilderInterface
 */
interface BuilderInterface
{
//    public function createPayee ();

    /**
     * @param $user
     * @return mixed
     */
    public function addUser ($user);

    public function addKey ();

    /**
     * @param $amount
     * @return mixed
     */
    public function addAmount ($amount);

    public function getPayee ();
}