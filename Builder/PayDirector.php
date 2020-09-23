<?php


/**
 * Class PayDirector
 */
class PayDirector
{

    protected $builder;

    /**
     * PayDirector constructor.
     * @param $builder
     */
    public function __construct (BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @param \BuilderInterface $builder
     */
    public function build ($user, $amount)
    {
        $params = $this->builder
            ->addKey()
            ->addUser($user)
            ->addAmount($amount)
            ->getPayee();
        //执行付款过程
        print_r($params);

    }
}