<?php
require_once './Factory.php';
require_once './QiangkunDaNuoYiKongfu.php';

/**
 * Class ZhangWuJiFactory
 */
class ZhangWuJiFactory extends Factory
{

    /**
     * @return string
     */
    public function makePower ()
    {
        return (new QiangkunDaNuoYiKongfu())->practice();
    }
}