<?php

require_once 'BuilderInterface.php';
/**
 * Class WechatBuilder
 */
class WechatBuilder implements BuilderInterface
{


    protected $data;

    /**
     * @param $user
     * @return $this
     */
    public function addUser ($user)
    {
        $this->data['user'] = $user;
        return $this;
    }

    /**
     * @return $this
     */
    public function addKey ()
    {
        $this->data['key'] = 'WECHAHTKEY:123kklfaj98874fhsajfh';
        return $this;
    }

    /**
     * @param $amount
     * @return $this
     */
    public function addAmount ($amount)
    {
        $this->data['amount'] = $amount;
        return $this;
    }

    public function getPayee ()
    {
        return $this->data;
    }
}