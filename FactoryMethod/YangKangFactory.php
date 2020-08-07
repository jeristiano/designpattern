<?php
require_once './Factory.php';
require_once './JiuYinZhenJingKongfu.php';

/**
 * Class YangKangFactory
 */
class YangKangFactory extends Factory
{

    /**
     * @return string
     */
    public function makePower ()
    {
        return (new JiuYinZhenJingKongfu())->practice();
    }
}