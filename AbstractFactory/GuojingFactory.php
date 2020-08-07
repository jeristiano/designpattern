<?php
include './skills/Xianglongzhang.php';
include './skills/YiTianSword.php';
include './skills/JiuYinZhenJing.php';
include_once './AbstractFactory.php';

/**
 * Class GuojingFactory
 */
class GuojingFactory extends AbstractFactory
{

    /**
     * @return string
     */
    public function createHandPower ()
    {
        return (new Xianglongzhang())->make();
    }

    /**
     * @return string
     */
    public function createWeaponPower ()
    {
        return (new YiTianSword())->pick();
    }

    /**
     * @return string
     */
    public function createInternalPower ()
    {
        return (new JiuYinZhenJing())->run();
    }
}