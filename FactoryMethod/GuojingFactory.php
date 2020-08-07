<?php

require_once './Factory.php';
require_once './XiangLongZhangKongfu.php';


/**
 * Class GuojingFactory
 */
class GuojingFactory extends Factory
{

    /**
     * @return string
     */
    public function makePower ()
    {
        return (new XiangLongZhangKongfu())->practice();
    }
}